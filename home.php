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
                        <span class="travel-text" style="color: rgba(255, 255, 255, 0.8); font-size: 3rem;">Explore,
                            Discover, Travel</span>

                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/travel.jpg)">
                    <div class="content">
                        <span class="travel-text" style="color: rgba(255, 255, 255, 0.8); font-size: 3rem;">Explore,
                            Discover, Travel</span>

                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/travel.jpg)">
                    <div class="content">
                        <span class="travel-text" style="color: rgba(255, 255, 255, 0.8); font-size: 3rem;">Explore,
                            Discover, Travel</span>

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

    <!-- home about section starts -->

    <section class="home-about">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quidem soluta pariatur nisi?
                Perspiciatis fugiat ea nihil commodi, amet ab architecto natus, esse ipsum, officiis sed magnam autem
                praesentium quod enim et. Esse dolore incidunt aut inventore error rem expedita debitis deleniti
                molestias corporis, earum sed minus, praesentium ex iure maiores atque natus iste. Minima, quo id
                molestias fugiat, deleniti quis numquam eius doloribus doloremque eveniet excepturi laboriosam iure
                sapiente dolorum, odio officiis aliquam quasi officia? Perferendis quae tenetur doloribus.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>


    </section>




    <!-- home about section ends -->

    <!-- home package section starts -->

    <section class="home-packages">

        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">

                <div class="image">

                    <img src="images/about.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>


            <div class="box">

                <div class="image">

                    <img src="images/about.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>

            <div class="box">

                <div class="image">

                    <img src="images/about.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>

            
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </section>

    <!-- home package section ends -->

<!-- home offer section starts -->

    

<!-- home offer section ends -->









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

        <div class="credit">Created with 🩵 by <span><a href="https://github.com/Abhishek-yadav-12">Abhishek Yadav</a>
            </span> || All rights reserved!</div>

    </section>

    <!-- footer section ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
</body>

</html>