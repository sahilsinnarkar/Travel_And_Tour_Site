<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- CSS slide -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header starts -->

    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!-- hearder ends -->

    <!-- booking section starts -->

    <section class="booking">

    <h1 class="heeading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputbox">
                <span>name : </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputbox">
                <span>email : </span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputbox">
                <span>phone : </span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputbox">
                <span>address : </span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputbox">
                <span>where to : </span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputbox">
                <span>how many : </span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputbox">
                <span>arrivals : </span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputbox">
                <span>leaving : </span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>

    </section>

    <!-- booking section ends -->







    <!-- footer section starts -->
    <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"><i class="fas fa-phone"></i> sahil@gmail.com </a>
            <a href="#"><i class="fas fa-phone"></i> Nashik, India - 422101 </a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linked In </a>
        </div>

    </div>

    <div class="credit">Created By <span>Sahil Sinnarkar</span> | all rights reserved!</div>

    </section>
    <!-- footer section ends -->

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- JS file -->
    <script src="script.js"></script>

</body>
</html>