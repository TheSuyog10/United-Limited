<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> LIsiting</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php
        // Database connection
        include 'connection.php';

        // Retrieve data from database
        $query = "SELECT * FROM listing";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)): ?>
            <div class="property_card">

                <div class="main-images">
                    <img id="blue" class="blue active" src="<?php echo $row['image']; ?>" alt="blue">

                </div>
                <div class="property-details">
                    <span class="property_title">
                        <?php echo $row['title']; ?>
                    </span>
                    <p>

                        <i class="fa-solid fa-location-dot"></i>
                        <?php echo $row['location']; ?>
                    </p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>


                <div class="price">
                    <span class="price_num">
                        Rs.
                        <?php echo $row['price']; ?>
                    </span>

                </div>

                <div class="button">
                    <div class="button-layer"></div>

                    <button
                        onclick="window.location.href='listingDescription.php?listingId=<?php echo $row['listingId']; ?>'"
                        class="buttonclass">Details</button>


                </div>
            </div>
        <?php endwhile; ?>

    </div>
    <?php include 'footer.php'; ?>
</body>
<style>
    /* Google Fonts Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        background-color: #4b6374;

    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        padding: 40px 0px;




    }

    .property_card {
        position: relative;
        max-width: 355px;
        width: 100%;

        padding: 20px 30px 30px 30px;
        border-radius: 20px;
        background: #80a5c2;
        box-shadow: inset 5px 5px 10px #7fa3c0,
            inset -5px -5px 10px #81a7c4;
        z-index: 3;
        overflow: hidden;
        align-items: space-between;
        margin: 30px 30px 30px 30px;
        /* Add space between rows */
    }

    .property_card .logo-cart {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .property_card .logo-cart img {
        height: 60px;
        width: 60px;
        object-fit: cover;
    }

    .property_card .logo-cart i {
        font-size: 27px;
        color: #707070;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .property_card .logo-cart i:hover {
        color: #333;
    }

    .property_card .main-images {
        position: relative;
        height: 210px;
    }

    .property_card .main-images img {
        position: absolute;
        height: 100%;
        width: 100%;
        object-fit: cover;

        border-radius: 25px;
        top: 0px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .property_card .main-images img.active {
        opacity: 1;
    }

    .property_card .property-details .property_title {
        font-size: 16px;
        font-weight: 500;
        color: #161616;
    }

    .property_card .property-details p {
        font-size: 12px;
        font-weight: 400;
        color: #333;
        text-align: justify;
    }

    .property_card .property-details .stars i {
        margin: 0 -1px;
        color: #333;
    }

    .property_card .color-price .color-option {
        display: flex;
        align-items: center;
    }


    .color-price .price {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .color-price .price .price_num {
        font-size: 25px;
        font-weight: 600;
        color: #707070;
    }

    .color-price .price .price_letter {
        font-size: 10px;
        font-weight: 600;
        margin-top: -4px;
        color: #707070;
    }

    .property_card .button {
        position: relative;
        height: 50px;
        width: 100%;
        border-radius: 25px;
        margin-top: 30px;
        overflow: hidden;
    }

    .property_card .button .button-layer {
        position: absolute;
        height: 100%;
        width: 300%;
        left: -100%;
        /* background-image: linear-gradient(135deg, #9708CC, #43CBFF, #9708CC, #43CBFF); */
        background-image: linear-gradient(135deg, #002548, #004e99, #002243, #4d6375);
        transition: all 0.4s ease;
        border-radius: 25PX;
    }

    .property_card .button:hover .button-layer {
        left: 0;
    }

    .property_card .button .buttonclass {
        position: relative;
        height: 100%;
        width: 100%;
        background: none;
        outline: none;
        border: none;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #fff;
    }

    @media (max-width: 1100px) {
        .property_card {
            flex-basis: calc(50% - 10px);

            /* Show 2 cards per row and add space between cards */
        }
    }

    @media (max-width: 769px) {
        .container {
            padding: 100px 20px;
        }

        .property_card {
            flex-basis: 100%;
            p
            /* Show 1 card per row on small screens */
        }
    }
</style>

</html>