<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="login.css" />
    <script src="https://kit.fontawesome.com/d5cb331474.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="../assets\images\logo.png" alt="" />
                            <h4>United<span id="span"> Limited</span></h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        <h4 style="text-align:center;color:red; font-weight:400" id="RepMsg1"></h4>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" name="uname" autocomplete="off" />
                                <label><i class="fas fa-user"></i> Username</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" name="pass"
                                    autocomplete="off" />
                                <label><i class="fas fa-lock"></i> Password</label>
                            </div>

                            <input type="submit" name="signIn" value="Sign In" class="sign-btn" />


                        </div>
                    </form>
                    <?php
                    include 'connection.php';
                    if (isset($_POST['signIn'])) {
                        $a = $_POST['uname'];
                        $b = md5($_POST['pass']);

                        $query = "select * from users where username='$a' and password='$b'";
                        $run = mysqli_query($conn, $query);
                        if ($a == "" || $b == "") {
                            echo "<script>
                            document.getElementById('RepMsg1').innerHTML = '<i class=\"fas fa-triangle-exclamation\" style=\"color:red; font-size:15px;\"></i> Empty Fields';
                            setTimeout(function() {
                                document.getElementById('RepMsg1').innerHTML = '';
                            }, 3000);
                            </script>";
                        } else {

                            if (mysqli_num_rows($run) > 0) {
                                $_SESSION['username'] = $a;
                                echo "<script>window.open('home.php','_self')</script>";
                            } else {
                                echo "<script>
                            document.getElementById('RepMsg1').innerHTML = '<i class=\"fas fa-triangle-exclamation\" style=\"color:red; font-size:15px;\"></i> Credentials Do Not Match';
                            setTimeout(function() {
                                document.getElementById('RepMsg1').innerHTML = '';
                            }, 3000);
                            </script>";
                            }
                        }
                    }
                    ?>

                    <form id="signupForm" autocomplete="off" class="sign-up-form" method="post">
                        <div class="logo">
                            <img src="../assets\images\logo.png " alt="United Limited" />
                            <h4>United<span id="span"> Limited</span></h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started
                            </h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in </a>
                        </div>
                        <h4 style="text-align:center;color:red; font-weight:400;" id="RepMsg"></h4>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="fname" id="fname" class="input-field"
                                    autocomplete="off" />
                                <label><i class="fas fa-user-tie"></i> First Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="lname" id="lname" class="input-field"
                                    autocomplete="off" />
                                <label><i class="fas fa-user-tie"></i> Last Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="username" id="username" class="input-field"
                                    autocomplete="off" />
                                <label><i class="fas fa-user"></i> Username</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="password" id="password" class="input-field"
                                    autocomplete="off" />
                                <label><i class="fas fa-lock"></i> Password</label>
                            </div>


                            <input type="submit" id="signupBtn" name="signUp" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I
                                agree to the
                                Terms of Services and
                                Privacy Policy
                            </p>
                        </div>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#signupForm').submit(function () {
                                event.preventDefault();
                                $.ajax(
                                    {
                                        url: '../php-backend/userAuthentication.php',
                                        type: "POST",
                                        data: $('#signupForm').serialize(),
                                        beforeSend: function () {
                                            // $('#RepMsg').fadeIn();
                                            // $('#RepMsg').html('<span style="color:black; font-weight:400"><i class="fas fa-circle-check" style="color:limegreen; font-size:13px;"></i> Signed Up Successfully!!! <span> <br> ');
                                            // setTimeout(() => {
                                            //     $('#RepMsg').fadeOut();
                                            // }, 3000);                                            //$('#signupForm')[0].reset();

                                        },


                                        success: function (response) {
                                            if (response == 6) {
                                                $('#RepMsg').fadeIn();
                                                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Password Must be 8 characters.');

                                            } if (response == 1) {

                                                $('#RepMsg').fadeIn();
                                                $('#RepMsg').html('<span style="color:red; font-weight:400;"><i class="fas fa-triangle-exclamation" style="color:red; font-size:12px;"></i> Username is already Taken<span>');
                                                setTimeout(() => {
                                                    $('#RepMsg').fadeOut();
                                                }, 3000);

                                            }
                                            if (response == 3) {

                                                $('#RepMsg').fadeIn();
                                                $('#RepMsg').html('<span style="color:limegreen; font-weight:400"><i class="fas fa-circle-check" style="color:limegreen; font-size:13px;"></i> Signed Up Successfully!!! <span> <br> ');
                                                setTimeout(() => {
                                                    $('#RepMsg').fadeOut();
                                                    location.reload();
                                                }, 2000);





                                            }
                                            if (response == 2) {
                                                $('#bgimg').addClass("bgimg-active");
                                                $('#otpVerify').addClass('active');
                                                /* window.location.replace('verify.php');*/
                                                // } if (response == 0) {
                                                //     $('#RepMsg').fadeIn();
                                                //     $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Invalid Email.')
                                                // }

                                            }
                                            if (response == 5) {
                                                $('#RepMsg').fadeIn();

                                                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:15px;"></i>  Empty Field.');
                                                setTimeout(() => {
                                                    $('#RepMsg').fadeOut();
                                                }, 3000);

                                            }
                                        }
                                    });
                            });
                        }
                        );
                    </script>
                </div>

                <!-- <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/image1.png" class="image img-1 show" alt="" />
                        <img src="./img/image2.png" class="image img-2" alt="" />
                        <img src="./img/image3.png" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script>const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");

        inputs.forEach((inp) => {
            inp.addEventListener("focus", () => {
                inp.classList.add("active");
            });
            inp.addEventListener("blur", () => {
                if (inp.value != "") return;
                inp.classList.remove("active");
            });
        });

        toggle_btn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("sign-up-mode");
            });
        });

        // function moveSlider() {
        //     let index = this.dataset.value;

        //     let currentImage = document.querySelector(`.img-${index}`);
        //     images.forEach((img) => img.classList.remove("show"));
        //     currentImage.classList.add("show");

        //     const textSlider = document.querySelector(".text-group");
        //     textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

        //     bullets.forEach((bull) => bull.classList.remove("active"));
        //     this.classList.add("active");
        // }

        // bullets.forEach((bullet) => {
        //     bullet.addEventListener("click", moveSlider);
        // });</script>

</body>

</html>