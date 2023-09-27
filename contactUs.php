<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="assets\images\logo1.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body style="background-color:#588b8b;">
    <?php
    include 'header.php' ?>
    <section class="get-in-touch">
        <h1 class="title">Get in touch</h1>
        <form class="contact-form row" method="post">
            <div class="form-field col x-50">
                <input name="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Name</label>
            </div>
            <div class="form-field col x-50">
                <input name="email" class="input-text js-input" type="text" required>
                <label class="label" for="email">E-mail</label>
            </div>
            <div class="form-field col x-50">
                <input name="phone" class="input-text js-input" type="text" required minlength="10" maxlength="10">
                <label class="label" for="phone">Phone</label>
            </div>
            <div class="form-field col x-50">
                <input name="subject" class="input-text js-input" type="text" required>
                <label class="label" for="subject">Subject</label>
            </div>
            <div class="form-field col x-100">
                <input name="message" class="input-text js-input message" type="text" required>
                <label class="label" for="message">Message</label>
            </div>
            <div class="form-field col x-100 align-center">
                <input class="submit-btn" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </section>
    <?php
    include 'connection.php';


    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];


        $query = "insert into contact(fullName, email, phone, subject, message)values('$Name','$Email','$Phone','$Subject','$Message')";
        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "<script> swal('Message Sent', 'We will Contact You Soon', 'success'); </script>";
            //echo "<script>window.open('booking.php','_self')</script>";
    
        } else {
            echo "<script> swal('Error', 'Try Sending Again', 'error'); </script>";
        }

    }
    ?>
</body>
<script>document.addEventListener('DOMContentLoaded', function () {
        var inputs = document.querySelectorAll('.input-text');
        inputs.forEach(function (input) {
            input.addEventListener('keyup', function () {
                if (input.value.trim() !== '') {
                    input.classList.add('not-empty');
                } else {
                    input.classList.remove('not-empty');
                }
            });
        });
    });</script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300);
    @import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);

    .align-center {
        text-align: center;
    }



    html {
        height: 100%;
    }

    body {
        height: 160vh;
        position: relative;

    }

    .row {
        margin: -20px 0;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .row .col {
        padding: 0 20px;
        float: left;
        box-sizing: border-box;
    }

    .row .col.x-50 {
        width: 50%;
    }

    .row .col.x-100 {
        width: 100%;
    }

    .content-wrapper {
        min-height: 100%;
        position: relative;
    }

    .get-in-touch {
        max-width: 650px;
        margin: 0 auto;
        position: relative;
        top: 45%;
        padding-bottom: 300px;
        transform: translateY(-50%);
        position: relative;
    }

    .get-in-touch .title {
        text-align: center;
        font-family: Raleway, sans-serif;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 36px;
        line-height: 48px;
        padding-bottom: 48px;
    }

    .contact-form .form-field {
        position: relative;
        margin: 32px 0;
    }

    .contact-form .input-text {
        display: block;
        width: 100%;
        height: 36px;
        border-width: 0 0 2px 0;
        border-color: #000;
        font-family: Lusitana, serif;
        font-size: 18px;
        line-height: 26px;
        font-weight: 400;
        color: #001d3d;
    }

    .contact-form .input-text:focus {
        outline: none;
    }

    .contact-form .input-text:focus+.label,
    .contact-form .input-text.not-empty+.label {
        transform: translateY(-24px);
    }

    .contact-form .label {
        position: absolute;
        left: 20px;
        bottom: 11px;
        font-family: Lusitana, serif;
        font-size: 18px;
        line-height: 26px;
        font-weight: 400;
        color: #001d3d;
        cursor: text;
        transition: transform 0.2s ease-in-out;
    }

    .contact-form .submit-btn {
        display: inline-block;
        background-color: #000;
        color: #fff;
        font-family: Raleway, sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 16px;
        line-height: 24px;
        padding: 8px 16px;
        border: none;
        cursor: pointer;
    }



    .note {
        position: absolute;
        left: 0;
        bottom: 10px;
        width: 100%;
        text-align: center;
        font-family: Lusitana, serif;
        font-size: 16px;
        line-height: 21px;
    }

    .note .link {
        color: #888;
        text-decoration: none;
    }

    .note .link:hover {
        text-decoration: underline;
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
        border-radius: 100px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #3e5c76;
        border-radius: 100px;
    }
</style>
<script>$('.js-input').keyup(function () {
        if ($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });</script>
<?php include 'footer.php' ?>

</html>