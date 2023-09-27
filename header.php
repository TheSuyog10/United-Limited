<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <script src="https://kit.fontawesome.com/a48f842f69.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <h1 class="logo"><a href="index.php">United <span>Limited</span></a></h1>
        <ul class="main-nav">
            <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="#">News & Events</a></li>
            <li><a href="#">Photo Gallery</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="admin\index.php">Login</a></li>
        </ul>
    </header>

</body>
<style>
    * {
        box-sizing: border-box;
    }


    html {
        scroll-behavior: smooth;
    }

    span {
        color: #006d77;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        margin: 0;
        min-height: 100vh;

    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }


    h2,
    h3,
    a {
        color: #001427;
    }

    a {
        text-decoration: none;
    }



    .logo {
        margin: 0;
        font-size: 1.45em;
        color: #001427;
    }

    .main-nav {
        margin-top: 5px;

    }

    .main-nav a {
        color: #001427;
        font-size: 1.5em;
        /* Increase the font size */
        font-weight: bold;
        /* Make the font bold */
    }

    .logo a,
    .main-nav a {
        padding: 10px 15px;
        text-transform: uppercase;
        text-align: center;
        display: block;
    }

    .main-nav a {
        color: #001427;
        font-size: .99em;
    }

    .main-nav a:hover {
        color: #006d77;

    }



    .header {
        padding-top: .5em;
        padding-bottom: .5em;
        border: 1px solid #a2a2a2;
        background-color: #83c5be;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }


    /* ================================= 
  Media Queries
==================================== */




    @media (min-width: 769px) {

        .header,
        .main-nav {
            display: flex;
        }

        .header {
            flex-direction: column;
            align-items: center;

            .header {
                width: 80%;
                margin: 0 auto;
                max-width: 1150px;
            }
        }

    }

    @media (min-width: 1025px) {
        .header {
            flex-direction: row;
            justify-content: space-between;
        }

    }
</style>

</html>