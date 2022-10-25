<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'header.php' ?>

<!-- header section ends -->

<!-- side-bar section starts -->

<?php include 'sidebar.php' ?>

<!-- side-bar section ends -->

<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>Lodhran, Pakistan - 59320</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>sanaahanif030@gmail.com</p>
            <p>sanaahanif029@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>+92 306 5678909</p>
            <p>+92 309 6578998</p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form method="post" action="mycontactform.php">
        <h3>get in touch</h3>
        <p>While we are good with smoke signals, there are simple ways for us to get in touch and answer your questions.
            You can easily contact us when you want. 
            It's our pleasure to guide you about your queries and solve your problems.</p>
        <div class="inputBox">
            <input type="text" placeholder="your name" name="customer_name">
            <input type="email" placeholder="your email" name="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number" name="number">
            <input type="text" placeholder="subject" name="subject">
        </div>
        <textarea name="msg" placeholder="your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn" value="save">
    </form>

 <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55543.29652223248!2d71.59341510696964!3d29.53221099123486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b9ee4e335c893%3A0x3cfb6dc1093330a9!2sLodhr%C4%81n%2C%20Lodhran%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1642402050702!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>newsletter</h3>
        <p>subscribe for weelky newsletter.</p>
    </div>

    <form action="">
        <input type="email" name="" placeholder="enter your email" id="" class="email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->



 











<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>