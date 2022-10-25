<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'header.php'?>

<!-- header section ends -->

<!-- side-bar section starts -->

<?php include 'sidebar.php' ?>

<!-- side-bar section ends -->

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>E-Commerce websites are online portals that facilitate online transactions of goods and services through means of the transfer of information and funds over the Internet. ... Now, with a single website, anything and everything that a transaction needs, can be executed online. </p>
        <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us</p>
        <a href="contact.php" class="btn">Contact Us</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to make websites?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
            Your domain name should reflect your products or services so that your customers can easily find your business through a search engine.<br>
            Find a web hosting company.<br>
            Prepare your content.<br>
            Build your website
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Step 1: Search for a product using Google shopping.<br>
                Step 2: Find an item you like using Google shopping.<br>
                Step 3: Search via Google.<br>
                Step 4: Searching for and buying a product from a website.<br>
                Step 5: Adding a product to your basket.<br>
                Step 6: Continue shopping or buy your product.<br>
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Enter Your Shipping Address.<br>
                Choose "Credit Card" as Your Payment Method.<br>
                Enter Your Info as It Appears on Your Credit Card.<br>
                Enter the Billing Address for Your Credit Card.<br>
                Verify Your Information.<br>
                Is paying online with my credit card safe?<br>
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Online bill paying is safe when you choose the right bill payment service.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Customer service center, also known as a contact center, is a specific part of organization. The center is composed of customer representative staff. The main function is to manage all customer contacts. Customer service center is also an important part of customer relationship management.
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> <span>reviews</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.jpg" alt="">
                <h3>Kamran Qadir</h3>
                <span>designer</span>
                <p>Our unique approach allows us to deliver high volumes of content created by craftsmen that have mastered artistic and technical excellence in their area</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.jpg" alt="">
                <h3>M.Usman</h3>
                <span>designer</span>
                <p>We believe uniformity is the key to unlocking transparency. Our radical approach to global content creation empowers our master storytellers to create and deliver high volumes of quality content when and where you need it.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.jpg" alt="">
                <h3>Muzamil Mehboob</h3>
                <span>designer</span>
                <p>We combined the best people with the smartest technology to build an industry-leading content engine that consistently fuels creativity and produces amazing content at the speed and scale of consumer demand</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->













<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>