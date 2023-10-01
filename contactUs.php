<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <script src="https://kit.fontawesome.com/d5cb331474.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</head>


<?php
include 'header.php' ?>

<body style="background-color:#588b8b !important;">

    <div class="container">
        <span class="big-circle"></span>
        <img src="assets\images\shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Have a question or need assistance? We're here for you! Contact us for all your real estate needs.
                </p>
                <div class="info">
                    <div class="information">
                        <i class="fa-solid fa-map-location-dot fa-xl" style="color: #13bd9d; margin-right:10px;"> </i>
                        <p> Bharatpur-4, Chitwan</p>
                    </div>
                    <div class="information">
                        <i class="fa-regular fa-envelope fa-xl" style="color: #13bd9d; margin-right:10px;"></i>

                        <p>united.limited@gmail.comm</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-phone-volume fa-xl" style="color: #13bd9d; margin-right:10px;"></i>
                        <p>+977 9845911212</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form method="post" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <h4 style="text-align:center;color:maroon; font-weight:600" id="RepMsg1"></h4>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Name</label>
                        <span>Name</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container">
                        <input type="text" name="subject" class="input" />
                        <label for="">Subject</label>
                        <span>Subject</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" name="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'connection.php';


    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];
        if ($Name == "" || $Email == "" || $Phone == "" || $Subject == "" || $Message == "") {
            echo "<script>
            document.getElementById('RepMsg1').innerHTML = '<i class=\"fas fa-triangle-exclamation\" style=\"color:red; font-size:15px;\"></i> Empty Fields';
            setTimeout(function() {
                document.getElementById('RepMsg1').innerHTML = '';
            }, 3000);
            </script>";
        } else {
            $query = "insert into contact(fullName, email, phone, subject, message)values('$Name','$Email','$Phone','$Subject','$Message')";
            $run = mysqli_query($conn, $query);
            if ($run) {
                echo "<script> swal('Message Sent', 'We will Contact You Soon', 'success'); </script>";


            } else {
                echo "<script> swal('Error', 'Try Sending Again', 'error'); </script>";
            }

        }
    }
    ?>
    <script>const inputs = document.querySelectorAll(".input");

        function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
        }

        function blurFunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }

        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });</script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            b;
        }


        input,
        textarea {
            font-family: "Poppins", sans-serif;

        }

        .container {
            font-family: "Poppins", sans-serif;
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            background-color: #588b8b;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form {
            width: 100%;
            max-width: 820px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-form {
            background-color: #1abc9c;
            position: relative;
        }

        .circle {
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20%, #149279);
            position: absolute;
        }

        .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;

        }

        .circle.two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }

        .contact-form:before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #1abc9c;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }

        form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }

        .title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
        }

        .input-container {
            position: relative;
            margin: 1rem 0;
        }

        .input {
            width: 100%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-radius: 25px;
            transition: 0.3s;
        }

        textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 22px;
            resize: none;
            overflow-y: auto;
        }

        .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }

        .input-container.textarea label {
            top: 1rem;
            transform: translateY(0);
        }

        .btn {
            padding: 0.6rem 1.3rem;
            background-color: #fff;
            border: 2px solid #fafafa;
            font-size: 0.95rem;
            color: #1abc9c;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
        }

        .btn:hover {
            background-color: transparent;
            color: #fff;
        }

        .input-container span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;
        }

        .input-container span:before,
        .input-container span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            background-color: #1abc9c;
            top: 50%;
            transform: translateY(-50%);
        }

        .input-container span:before {
            left: 50%;
        }

        .input-container span:after {
            right: 50%;
        }

        .input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }

        .input-container.focus span:before,
        .input-container.focus span:after {
            width: 50%;
            opacity: 1;
        }

        .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }

        .contact-info .title {
            color: #1abc9c;
        }

        .text {
            color: #333;
            margin: 1.5rem 0 2rem 0;
        }

        .information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }

        .icon {
            width: 28px;
            margin-right: 0.7rem;
        }

        .social-media {
            padding: 2rem 0 0 0;
        }

        .social-media p {
            color: #333;
        }

        .social-icons {
            display: flex;
            margin-top: 0.5rem;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            background: linear-gradient(45deg, #1abc9c, #149279);
            color: #fff;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.05);
        }

        .contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #1abc9c;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3;
        }

        .big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #1cd4af, #159b80);
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%);
        }

        .big-circle:after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #588b8b;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px);
        }

        .square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2;
        }

        @media (max-width: 850px) {
            .form {
                grid-template-columns: 1fr;
            }

            .contact-info:before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95);
            }

            .contact-form:before {
                top: -13px;
                left: initial;
                right: 70px;
            }

            .square {
                transform: translate(140%, 43%);
                height: 350px;
            }

            .big-circle {
                bottom: 75%;
                transform: scale(0.9) translate(-40%, 30%);
                right: 50%;
            }

            .text {
                margin: 1rem 0 1.5rem 0;
            }

            .social-media {
                padding: 1.5rem 0 0 0;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }

            .contact-info:before {
                display: none;
            }

            .square,
            .big-circle {
                display: none;
            }

            form,
            .contact-info {
                padding: 1.7rem 1.6rem;
            }

            .text,
            .information,
            .social-media p {
                font-size: 0.8rem;
            }

            .title {
                font-size: 1.15rem;
            }

            .social-icons a {
                width: 30px;
                height: 30px;
                line-height: 30px;
            }

            .icon {
                width: 23px;
            }

            .input {
                padding: 0.45rem 1.2rem;
            }

            .btn {
                padding: 0.45rem 1.2rem;
            }
        }
    </style>
    <?php include 'footer.php' ?>
</body>


</html>