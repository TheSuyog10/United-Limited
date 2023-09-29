<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/a48f842f69.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets\images\logo1.png">
</head>

<body>
    <div class="footer">
        <div class="heading">
            <h2 style="align-text:center">United <span style="color: #006d77;">Limited</span></h2>
        </div>
        <div class="content">
            <div class="services">
                <h2 class="sub-heading">Services</h2>
                <p><a href="aboutUs.php#services">Property Management</a></p>
                <p><a href="aboutUs.php#services">Residential Sales & Leasing</a></p>
                <p><a href="aboutUs.php#services">Real Estate Consulting</a></p>
                <p><a href="aboutUs.php#services">Brokerage Services</a></p>
                <p><a href="aboutUs.php#services">Real Estate
                        Appraisal</a> </p>
            </div>
            <div class="social-media">
                <h2 class="sub-heading">Quick Links</h2>
                <p>
                    <a href="index.php">Home</a>
                </p>
                <p>
                    <a href="aboutUs.php">About Us</a>
                </p>
                <p>
                    <a href="booking.php">Book Now</a>
                </p>
                <p>
                    <a href="#">Gallery</a>
                </p>
                <p>
                    <a href="#">News And Events</a>
                </p>


            </div>
            <div class="links">
                <h2 class="sub-heading">Contact</h2>
                <p>Bharatpur-4, Chitwan, Nepal</p>
                <p>Phone: +977 9845911212</p>
                <p>Email: <a href="mailto:united.limited@gmail.com">united.limited@gmail.com</a></p>
                <p>Website: <a href="http://www.unitedlimited.com.np">www.unitedlimited.com.np</a></p>

                <p><a href="" class="icon"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
                </p>
            </div>
        </div>
        <footer>

            All rights reserved © 2023 United Limited
        </footer>
    </div>
</body>
<style>
    html {
        height: 100%;
        /* Ensure the HTML element takes the full viewport height */
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        /* Remove default margin */
        padding: 0;
        /* Remove default padding */
    }

    .icon {
        margin-right: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sub-heading {
        padding: 10px 15px;
        text-transform: uppercase;
        text-align: center;
        display: block;
        font-family: 'Montserrat', sans-serif;
    }

    .footer {
        flex-shrink: 0;
        background-color: #83c5be;
        color: #4a4e69;
        width: 100%;
        bottom: 0;
        left: 0;
        margin-top: auto;
        /* Push the footer to the bottom using 'auto' margin */
        border: 1px solid #a2a2a2;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .footer .heading {
        color: #6f1d1b;
        max-width: 1010px;
        width: 90%;
        text-transform: uppercase;
        margin: 0 auto;
        margin-bottom: 3rem;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-weight: 1000px;
    }

    .footer .content {
        display: flex;
        flex: 1 0 auto;
        justify-content: space-evenly;
        margin: 1.5rem;
    }

    .footer .content p {
        margin-bottom: 1.3rem;
    }

    .footer .content a {
        text-decoration: none;
        color: #4a4e69;
    }

    .footer .content a:hover {


        color: #006d77 !important;
    }

    .footer .content h4 {
        margin-bottom: 1.3rem;
        font-size: 19px;
    }

    footer {
        text-align: center;
        padding-bottom: 20px
    }

    footer hr {
        margin: 2rem 0;
    }

    @media (max-width: 767px) {
        .footer .content {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }

        .footer {
            position: unset;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {

        .footer .content,
        .footer {
            font-size: 14px;
        }
    }

    @media (orientation: landscape) and (max-height: 500px) {
        .footer {
            position: unset;
        }
    }
</style>

</html>