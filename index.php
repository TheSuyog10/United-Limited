<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Limited</title>
    <link rel="icon" href="assets\images\logo1.png">

    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

</head>

<body style="height: 200vh">
    <?php
    include 'header.php';
    ?>

    <div style="height:100vh;">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"> <img src="assets\listingimages\house.jpg" alt=""></li>
                    <li class="splide__slide"> <img src="assets\listingimages\mustang.jpg" alt=""></li>
                    <li class="splide__slide"> <img src="assets\listingimages\real-state.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
   

    <script>


        const splide = new Splide('.splide', {
            var splide = new Splide('.splide', {
                direction: 'rtl',
                perPage: 3,
            });

            splide.mount();
        }
    </script>

</body>
<style>
    html,
    body {
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
    }
</style>

</html>