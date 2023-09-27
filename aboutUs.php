<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="assets\images\logo1.png">
</head>

<body>
    <?php include 'header.php'; ?>

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col1">
                    <img src="assets\images\UnitedLimitedLogo.png">

                </div>

                <div class="about-col2">
                    <h1 class="sub-title" style="color:#2f0e07;">About US </h1>
                    <p> United Limited is a distinguished name in the real estate landscape of Bharatpur-4, Chitwan,
                        Nepal. Established with a clear vision and an unwavering commitment to excellence, United
                        Limited has swiftly risen to prominence as a reputable and trusted real estate company.
                        <br>
                        At United Limited, our mission is clear - to be the foremost choice for those seeking
                        exceptional real estate services. We believe in not just meeting but exceeding the expectations
                        of our clients. We aim to provide top-notch solutions for all your real estate requirements.





                    </p>
                    <br>
                    <div class="tab-titles">
                        <p class="tab-link active-link" onclick="opentab('skills')">Our Missions</p>
                        <p class="tab-link" onclick="opentab('experience')">Why Us?</p>
                        <p class="tab-link" onclick="opentab('education')">Our Values</p>
                    </div>

                    <div>
                        <ul class="tab-content active-tab " id="skills">
                            <li class="tittle-name">Excellence in Service</li><br>
                            <li class="tittle-name">Community Enrichment</li><br>
                            <li class="tittle-name">Client-Centric Approach</li><br>
                            <li class="tittle-name">Local Expertise</li>


                        </ul>
                    </div>
                    <div>
                        <ul class="tab-content" id="experience">


                            <li class="tittle-name">Transparent Communication
                            </li><br>
                            <li class="tittle-name">Proven Integrity
                            </li><br>
                            <li class="tittle-name">Innovative Technology
                            </li><br>
                            <li class="tittle-name">Personalized Service
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="tab-content" id="education">
                            <li class="tittle-name">Innovation and Adaptability </li><br>
                            <li class="tittle-name">Quality and Excellence</li><br>
                            <li class="tittle-name">Sustainability and Responsibility</li><br>
                            <li class="tittle-name">Communication and Collaboration</li>
                        </ul>
                    </div>






                </div>



            </div>


        </div>
    </div>
    <script>
        var tablinks = document.getElementsByClassName("tab-link");
        var tabcontents = document.getElementsByClassName("tab-content");
        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");

        }
    </script>
    <!---------------------------------Secvices--------------------------->
    <div id="services">
        <div class="container">
            <h1 class="sub-title" style="color:#2f0e07;"> Our Services</h1>
            <div class="services-list">
                <div>
                    <img src="assets\images\propertyManangement.png" alt="" style="width:60px; height:60px;">


                    <h2>Property Management</h2>
                    <p>We offer comprehensive property management services, handling everything from tenant relations to
                        maintenance and repairs. Our goal is to make property ownership hassle-free for you, ensuring
                        your real estate is well-managed and profitable. Trust us to take care of your property as if it
                        were our own.</p>

                </div>
                <div>
                    <img src="assets\images\realstateConsulting.png" alt=""
                        style="position: sticky; width:60px; height:60px; top:-40px padding-bootom:0;">

                    <h2>Realestate Consulting</h2>
                    <p> Our real estate consulting services provide strategic guidance to navigate the complex property
                        market. We offer expert advice on property investment, market trends, and valuation, helping you
                        make informed decisions. Our goal is to maximize your returns and minimize risks in real estate
                        investments.</p>

                </div>
                <div>
                    <img src="assets\images\residentalSales.png" alt="" style="width:60px; height:60px;">
                    <h2>Residental Sales</h2>
                    <p>We specialize in residential sales, connecting potential homeowners with their dream properties.
                        Our team understands the market trends and leverages this knowledge to ensure smooth
                        transactions. We’re committed to providing a seamless buying and selling experience for all our
                        clients.</p>

                </div>
                <div>
                    <img src="assets\images\appraisal.png" alt="" style="width:60px; height:60px;">
                    <h2>Property Appraisal</h2>
                    <p>Our team provides comprehensive property appraisal services, accurately assessing the value of
                        real estate assets. We consider market trends, location, and property condition to deliver a
                        fair and reliable valuation, helping you make informed decisions about your property.</p>

                </div>
                <div>
                    <img src="assets\images\broker.png" alt="" style="width:60px; height:60px;">
                    <h2>Brokerage Services</h2>
                    <p>Our brokerage services are your pathway to seamless real estate transactions. With a dedicated
                        team of experts, we guide clients through the intricate process of buying and selling
                        properties, ensuring optimal deals and successful outcomes.</p>

                </div>
                <div>
                    <img src="assets\images\maintenance.png" alt="" style="width:60px; height:60px;">
                    <h2>Renovation Projects</h2>
                    <p>Unlock the full potential of your property with our renovation services. Our skilled team
                        specializes in revitalizing spaces, enhancing not only their aesthetic appeal but also their
                        overall functionality. Experience an increase in value and an elevated living environment with
                        our expert renovations</p>

                </div>


            </div>

        </div>

    </div>


    <?php include 'footer.php'; ?>
</body>
<style>
    body {
        background-color: #588b8b;

    }



    /*------------------about-------------------*/
    #about {
        padding: 5% 4% 0 4%;

        color: lightgray;
    }

    .row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .about-col1 {
        flex-basis: 35%;
    }

    .about-col1 img {
        width: 100%;
        border-radius: 15px;
        height: 100%;

        transition: transform 0.4s;
    }

    .about-col1 img:hover {
        transform: scale(1.1);
        background-color: #264653;
    }

    .about-col2 {
        flex-basis: 60%;
    }

    .about-col2 p {
        font-size: 20px;
        text-align: justify;
        color: lightgray;
        line-height: 35px;
    }

    .sub-title {
        font-size: 60px;
        font-weight: 600;
        color: aliceblue;
    }

    .tab-titles {
        display: flex;
        /*margin: -490px 540px 40px;*/


    }

    .tab-link {
        margin-right: 50px;
        cursor: pointer;
        position: relative;
        color: #2f0e07 !important;
        font-weight: 700;
        font-size: 23px !important;

        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .tab-link::after {
        content: "";
        width: 0%;
        height: 3px;
        position: absolute;
        background: #264653;
        left: 0;
        bottom: 0;
        transition: 0.5s;
    }

    .tab-link.active-link::after {
        width: 50%;
    }

    .tab-content {
        /*margin: -340px 540px 40px;*/
        margin-top: 10px;
        list-style: none;
        font-size: 18px;
    }

    .tittle-name span {}

    .tab-content {
        display: none;
    }

    .tab-content.active-tab {
        display: block;
    }

    /*-----------------Services------------------*/
    #services {
        padding: 5% 4%;
    }

    .services-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-template-areas:
            "item1 item2 item3"
            "item4 item5 item6";
        grid-gap: 40px;
        margin-top: 50px;
    }

    .services-list div:nth-child(1) {
        grid-area: item1;
    }

    .services-list div:nth-child(2) {
        grid-area: item2;
    }

    .services-list div:nth-child(3) {
        grid-area: item3;
    }

    .services-list div:nth-child(4) {
        grid-area: item4;
    }

    .services-list div:nth-child(5) {
        grid-area: item5;
    }

    .services-list div:nth-child(6) {
        grid-area: item6;
    }

    .services-list div {
        background: #6c757d;
        padding: 40px;
        font-size: 16px;

        font-weight: 500;
        border-radius: 15px;
        transition: background 0.5s, transform 0.5s;
    }

    .services-list div i {
        font-size: 0px;
        margin-bottom: 30px;
    }

    .services-list div h2 {

        font-size: 25px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .services-list div a {
        text-decoration: none;
        color: #ffff;
        font-size: 12px;
        display: inline-block;
    }

    .services-list div p {
        display: flex;
        text-align: justify;
        color: whitesmoke;
        margin-bottom: 20px;
        font-size: 18px;
    }

    .services-list div:hover {
        background-color: #264653;
        transform: translateY(-10px);
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

    @media only screen and (max-width: 900px) {


        .sub-title {
            font-size: 30px;
        }

        .about-col1,
        .about-col2 {
            flex-basis: 100%;
        }

        .about-col1 {
            margin-bottom: 50px;
        }

        .about-col2 {
            font-size: 16x;
        }


        .tab-link {
            font-size: 18px;
        }

        .tab-content {
            font-size: 17px;
            margin-bottom: 60px;
        }

        .services-list {
            grid-template-columns: 1fr;
            grid-template-rows: repeat(6, 1fr);
            grid-template-areas:
                "item1"
                "item2"
                "item3"
                "item4"
                "item5"
                "item6";
        }

        .about-col2 p {
            font-size: 17px;
            text-align: justify;
            color: lightgray;
        }

        ::-webkit-scrollbar {
            width: 6px;
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