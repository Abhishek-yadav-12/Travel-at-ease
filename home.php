<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <!-- header section starting -->

    <section class="header">

        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">

            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>


        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>



    <!-- header section ending -->

    <!-- home section starts -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/travel.jpg)">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/travel.jpg)">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/travel.jpg)">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your time count</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>


    <!-- home section ends -->


    <!-- sevices section starts -->


    <section class="services">

        <h1 class="heading-title">
            Our services
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Adventures</h3>
            </div>
            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/earth.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>

    </section>


    <!-- sevices section ends -->















    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>


            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About US</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 9569790726 </a>
                <a href="#"> <i class="fas fa-envelope"></i> abhishekay2003@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Varanasi, Uttar Pradesh, India </a>
            </div>

            <div class="box">
                <h3>Follow US</h3>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            </div>
        </div>

        <div class="credit">Created with 🩵 by <span>Abhishek Yadav </span> || All rights reserved!</div>

    </section>

    <!-- footer section ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
</body>

</html>