<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'header.php' ?>

<!-- header section ends -->

<!-- side-bar section starts -->

<?php include 'sidebar.php' ?>

<!-- side-bar section ends -->

<!-- side-bar section ends -->

<!-- register form section starts  -->

<section class="register">

    <form method="POST" action="registrationinfo.php">
        <h3>register now</h3>
        <input type="text" name="username" placeholder="enter your name" id="" class="box" required>
        <input type="email" name="email" placeholder="enter your email" id="" class="box" required>
        <input type="password" name="password" placeholder="enter your password" id="" class="box" required>
        <input type="password" name="R_password" placeholder="re-enter your password" id="" class="box" required>
        <input type="submit"  name="submit" value="register now" class="btn">
        <p>already have an account?</p>
        <a href="login.php" class="btn link">login now</a>
    </form>

</section>

<!-- register form section ends  -->















<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>