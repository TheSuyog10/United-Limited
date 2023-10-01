<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/d5cb331474.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets\images\logo1.png">
</head>

<body>

    <?php include 'header.php' ?>
    <h2 class="HEADER"
        style="color:#cce3de; text-align:center; font-family:Helvetica, Arial, sans-serif; font-size:36px">Book Your
        Property</h2>

    <form action="?" method="post">
        <h4 style="text-align:center;color:red; font-weight:600" id="RepMsg1"></h4>
        <label for="fname">First Name</label>
        <input type="text" class="feedback-input" name="fname" id="fname" placeholder="First Name">

        <label for="lname">Last Name</label>
        <input type="text" class="feedback-input" name="lname" id="lname" placeholder="Last Name">

        <label for="address">Address</label>
        <input type="text" class="feedback-input" name="address" id="address" placeholder="Address">

        <label for="city">City</label>
        <input type="text" class="feedback-input" name="city" id="city" placeholder="City">

        <label for="country">Country</label>
        <input type="text" class="feedback-input" name="country" id="country" placeholder="Nepal">

        <label for="phone">Phone</label>
        <input type="text" class="feedback-input" name="phone" id="phone" placeholder="+977 9800000000">

        <label for="email">Email</label>
        <input type="text" class="feedback-input" name="email" id="email" placeholder="sample@mail.com">

        <label for="booking">Property Id</label>
        <input type="text" class="feedback-input" name="booking" id="booking" placeholder="1">

        <button type="submit" name="submit">Send</button>
    </form>

    <?php
    include 'connection.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webproject";
    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if (isset($_POST['submit'])) {
        $a = $_POST['fname'];
        $b = $_POST['lname'];
        $c = $_POST['address'];
        $d = $_POST['city'];
        $e = $_POST['country'];
        $f = $_POST['phone'];
        $g = $_POST['email'];
        $h = $_POST['booking'];
        if ($a == "" || $b == "" || $c == "" || $d == "" || $e == "" || $f == "" || $g == "" || $h = "") {
            // echo "<script>
            // document.getElementById('RepMsg1').innerHTML = '<i class=\"fas fa-triangle-exclamation\" style=\"color:red; font-size:15px;\"></i> Empty Fields';
            // setTimeout(function() {
            //     document.getElementById('RepMsg1').innerHTML = '';
            // }, 3000);
            // </script>";
            echo "<script> swal('Booking Unsuccessfull!', 'Some Fields are Empty', 'warning'); </script>";
        } else {
            $query = "insert into reservation(fname, lname, address, city, country, phone, email, booking)values('$a','$b','$c','$d','$e','$f','$g','$h')";
            $run = mysqli_query($conn, $query);


            if ($run) {
                echo "<script> swal('Booking Successfull!', 'Your booking details has been submitted', 'success'); </script>";
                //echo "<script>window.open('booking.php','_self')</script>";
    
            } else {
                echo "<script> swal('Booking Unsuccessfull!', 'Try Again For Submitting', 'error'); </script>";
            }
        }
    }

    ?>
    <?php include 'footer.php' ?>
</body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

    body {
        background: #2f3e46 !important;
    }

    form {
        max-width: 420px !important;
        margin: 50px auto !important;
    }

    label {
        color: white !important;
        font-family: Helvetica, Arial, sans-serif !important;
        font-weight: 500 !important;
        font-size: 18px !important;
    }

    .feedback-input {
        color: white !important;
        font-family: Helvetica, Arial, sans-serif !important;
        font-weight: 500 !important;
        font-size: 18px !important;
        border-radius: 5px !important;
        line-height: 22px !important;
        background-color: transparent !important;
        border: 2px solid #CC6666 !important;
        transition: all 0.3s !important;
        padding: 13px !important;
        margin-bottom: 15px !important;
        width: 100% !important;
        box-sizing: border-box !important;
        outline: 0 !important;
    }

    .feedback-input:focus {
        border: 2px solid #CC4949 !important;
    }

    textarea {
        height: 150px !important;
        line-height: 150% !important;
        resize: vertical !important;
    }

    [type='submit'] {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
        width: 100% !important;
        background: #CC6666 !important;
        border-radius: 5px;
        border: 0;
        cursor: pointer;
        color: white;
        font-size: 24px;
        padding-top: 10px;
        padding-bottom: 10px;
        transition: all 0.3s;
        margin-top: -4px;
        font-weight: 700;
    }

    [type='submit']:hover {
        background: #CC4949;
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

</html>