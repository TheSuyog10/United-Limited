<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detsils</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php

        // Database connection
        include 'connection.php';
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "webproject";
        $conn = mysqli_connect($servername, $username, $password, $db_name);
        if (isset($_GET['listingId'])) //add
        {
            // Retrieve property ID from URL
            $id = $_GET['listingId'];

            // Retrieve property details from database
            $query = "SELECT * FROM listing WHERE listingId = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);

            // Display property details
            echo "<h1>" . $row['title'] . "</h1>";
            ?><img src="<?php echo $row['image']; ?>" alt="">
            <?php
            echo "<p>Property Id: " . $row['listingId'] . "</p>";
            echo "<p>" . $row['location'] . "</p>";
            echo "<p>Rs. " . $row['price'] . "</p>";
            echo "<p> " . $row['description'] . "</p>";

            // Add more details as needed...
        } else {
            echo "error";
        }
        ?>
        <a href="booking.php"><button class="button">Book Now</button></a>
    </div>
    <?php include 'footer.php'; ?>

</body>
<style>
    body {
        background-color: #4d787b;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;

        padding: 20px;
        border-radius: 19px;
        background: #638a8c;
        box-shadow: inset 5px 5px 10px #608688,
            inset -5px -5px 10px #668e90;

    }

    .container img {
        width: 70%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
    }

    h1 {
        font-size: 24px;
        color: #333;
    }


    p {
        color: black;
        font-size: 16px;
    }

    #description {
        font-size: 18px;
        margin-top: 20px;
    }

    button {
        border: none;
        color: brown;
        font-weight: 600;
        background-image: linear-gradient(30deg, #a9fff5, #7eafb2);
        border-radius: 20px;
        background-size: 100% auto;
        font-family: inherit;
        font-size: 17px;
        padding: 0.6em 1.5em;
    }

    button:hover {
        background-position: right center;
        background-size: 200% auto;
        -webkit-animation: pulse 2s infinite;
        animation: pulse512 1.5s infinite;
    }

    @keyframes pulse512 {
        0% {
            box-shadow: 0 0 0 0 #05bada66;
        }

        70% {
            box-shadow: 0 0 0 10px rgb(218 103 68 / 0%);
        }

        100% {
            box-shadow: 0 0 0 0 rgb(218 103 68 / 0%);
        }
    }

    /* Add animation CSS class */
    .fadeIn {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
<script>
    // JavaScript to add animation when the page loads
    window.onload = function () {
        const description = document.getElementById("description");
        description.classList.add("fadeIn");
    };
</script>

</html>