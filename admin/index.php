<!DOCTYPE html>
<html>

<head>
    <title>Login & Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a48f842f69.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <div class="cont">
        <div class="form sign-in">
            <form action="" method="post">
                <label>
                    <span>Username</span>
                    <input type="text" name="uname" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pass" required>
                </label>
                <button class="submit" name="signIn" type="submit">Sign In</button>
            </form>
        </div>

        <?php
        include 'connection.php';
        if (isset($_POST['signIn'])) {
            $a = $_POST['uname'];
            $b = md5($_POST['pass']);

            $query = "select * from users where username='$a' and password='$b'";
            $run = mysqli_query($conn, $query);

            if (mysqli_num_rows($run) > 0) {
                $_SESSION['username'] = $a;
                echo "<script>window.open('home.php','_self')</script>";
            } else {
                echo "<div id='alert' style='color: white; background-color: red; padding: 10px; margin-bottom: 10px; top: 0%; font-weight: 1000px;'> Credentials Do Not Match</div>";
            }
        }
        ?>






        <div class="sub-cont">

            <div class="img">
                <div class="img-text m-up">
                    <h1>New here?</h1>
                    <p>Sign Up and Discover</p>
                </div>
                <div class="img-text m-in">
                    <h1>One of us?</h1>
                    <p>Just sign in </p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>


            <div class="form sign-up">
                <form id="signupForm" method="post">
                    <h2>Sign Up</h2>
                    <h4 style="text-align:center;color:red;" id="RepMsg"></h4>

                    <label>
                        <span>First Name</span>
                        <input type="text" name="fname" id="fname">
                    </label>
                    <label>
                        <span>Last Name</span>
                        <input type="text" name="lname" id="lname">
                    </label>
                    <label>
                        <span>Username</span>
                        <input type="text" name="username" id="username">
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" id="password" minlength="8">
                    </label>
                    <label>
                        <span>Confirm Password</span>
                        <input type="password" name="cpassword" id="cpassword" minlength="8">
                    </label>

                    <button type="submit" id="signupBtn" name="signUp" class="submit">Sign Up Now</button>
                </form>

            </div>

        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#signupForm').submit(function () {
                event.preventDefault();
                $.ajax({
                    url: '../php-backend/userAuthentication.php',
                    type: "POST",
                    data: $('#signupForm').serialize(),
                    beforeSend: function () {
                        $('#RepMsg').fadeIn();
                        $('#RepMsg').html('<span style="color:green;">Verfying ...<span>');

                    },
                    success: function (response) {
                        if (response == 6) {
                            $('#RepMsg').fadeIn();
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Password Must be 8 characters.');

                        } if (response == 1) {
                            alert('Already taken');
                            $('#RepMsg').fadeIn();
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>This Email is already Taken.');

                        } if (response == 3) {
                            $('#id_password').css('border-bottom', 'solid 2px red');
                            $('#id_conPassword').css('border-bottom', 'solid 2px red');

                            $('#RepMsg').fadeIn();
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Password and Confirm Password did not match.')

                        }
                        if (response == 2) {
                            $('#bgimg').addClass("bgimg-active");
                            $('#otpVerify').addClass('active');
                            /* window.location.replace('verify.php');*/
                        } if (response == 0) {
                            $('#RepMsg').fadeIn();
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Invalid Email.')
                        }
                        if (response == 5) {
                            $('#RepMsg').fadeIn();
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Empty Field.')
                            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Empty Field.');
                            setTimeout(() => {
                                $('#RepMsg').fadeOut();
                            }, 3000);

                        }
                    }
                });
            });
        });
    </script>


    <style>
        .alert-success {
            color: white;
            background-color: limegreen;
            margin-top: 2% !important;
            padding: 5px;
            margin-bottom: ;
            font-weight: bold;
            position: ;
            width: auto;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            top: 5% !important;

            border-radius: 15px;

            text-align: center !important;
        }


        *,
        *:before,
        *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;

        }

        #alert {
            color: red;

            padding: 5px 40px;
            margin-bottom: 10px;
            font-weight: bold;
            position: fixed;
            width: auto;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            top: 17%;

            border-radius: 20px;
            display: flex;
            justify-content: center;
            text-align: center !important;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Nunito', sans-serif;
            border-radius: 50%;
            background-color: #457b9d;
        }

        input,
        button {
            border: none;
            background: none;
        }

        .cont {
            overflow: hidden;
            position: relative;
            width: 900px;
            height: 600px;
            background: #c9def0;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            border-radius: 15px;
        }

        .form {
            position: relative;
            width: 640px;
            height: 100%;
            padding: 50px 30px;
            -webkit-transition: -webkit-transform 1.2s ease-in-out;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
        }

        h2 {
            width: 100%;
            font-size: 30px;
            text-align: center;
        }

        label {
            display: block;
            width: 260px;
            margin: 25px auto 0;
            text-align: center;
        }

        label span {
            font-size: 14px;
            font-weight: 600;
            color: #505f75;
            text-transform: uppercase;
        }

        input {
            display: block;
            width: 100%;
            margin-top: 5px;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 1px solid rgba(109, 93, 93, 0.4);
            text-align: center;
            font-family: 'Nunito', sans-serif;
        }

        button {
            display: block;
            margin: 0 auto;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .submit {
            margin-top: 30px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 600;
            font-family: 'Nunito', sans-serif;
            background: rgb(131, 128, 128);
            transition: .5s;
        }

        .submit:hover {
            transition: .5s;
            background: #000;
        }

        .forgot-pass {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: #0c0101;
            cursor: pointer;
        }

        .forgot-pass:hover {
            color: red;
        }

        .social-media {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .social-media ul {
            list-style: none;
        }

        .social-media ul li {
            display: inline-block;
            cursor: pointer;
            margin: 25px 10px;
        }

        .social-media img {
            width: 20px;
            height: 20px;
        }

        .sub-cont {
            overflow: hidden;
            position: absolute;
            left: 640px;
            top: 0;
            width: 900px;
            height: 100%;
            padding-left: 260px;
            background: #fff;
            -webkit-transition: -webkit-transform 1.2s ease-in-out;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out;
        }

        .cont.s-signup .sub-cont {
            -webkit-transform: translate3d(-640px, 0, 0);
            transform: translate3d(-640px, 0, 0);
        }

        .img {
            overflow: hidden;
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 260px;
            height: 100%;
            padding-top: 360px;
        }

        .img:before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 900px;
            height: 100%;
            background-image: url();
            background-size: cover;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
        }

        .img:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        .cont.s-signup .img:before {
            -webkit-transform: translate3d(640px, 0, 0);
            transform: translate3d(640px, 0, 0);
        }

        .img-text {
            z-index: 2;
            position: absolute;
            left: 0;
            top: 50px;
            width: 100%;
            padding: 0 20px;
            text-align: center;
            color: #fff;
            -webkit-transition: -webkit-transform 1.2s ease-in-out;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
        }

        .img-text h2 {
            margin-bottom: 10px;
            font-weight: normal;
        }

        .img-text p {
            font-size: 14px;
            line-height: 1.5;
        }

        .cont.s-signup .img-text.m-up {
            -webkit-transform: translateX(520px);
            transform: translateX(520px);
        }

        .img-text.m-in {
            -webkit-transform: translateX(-520px);
            transform: translateX(-520px);
        }

        .cont.s-signup .img-text.m-in {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }


        .sign-in {
            padding-top: 65px;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .cont.s-signup .sign-in {
            -webkit-transition-timing-function: ease-in-out;
            transition-timing-function: ease-in-out;
            -webkit-transition-duration: 1.2s;
            transition-duration: 1.2s;
            -webkit-transform: translate3d(640px, 0, 0);
            transform: translate3d(640px, 0, 0);
        }

        .img-btn {
            overflow: hidden;
            z-index: 2;
            position: relative;
            width: 100px;
            height: 36px;
            margin: 0 auto;
            background: transparent;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            cursor: pointer;
        }

        .img-btn:after {
            content: '';
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-radius: 30px;
        }

        .img-btn span {
            position: absolute;
            left: 0;
            top: 0;
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            -webkit-transition: -webkit-transform 1.2s;
            transition: -webkit-transform 1.2s;
            transition: transform 1.2s;
            transition: transform 1.2s, -webkit-transform 1.2s;
            ;
        }

        .img-btn span.m-in {
            -webkit-transform: translateY(-72px);
            transform: translateY(-72px);
        }

        .cont.s-signup .img-btn span.m-in {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .cont.s-signup .img-btn span.m-up {
            -webkit-transform: translateY(72px);
            transform: translateY(72px);
        }

        .sign-up {
            -webkit-transform: translate3d(-900px, 0, 0);
            transform: translate3d(-900px, 0, 0);
        }

        .cont.s-signup .sign-up {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    </style>
    <script>document.querySelector('.img-btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s-signup')
        }
        );
    </script>

</body>

</html>