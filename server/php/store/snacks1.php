<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>United Food</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>

    <!-- Initial -->
    <section class="snack text-center">
        <div class="container">
            <div class="row valing ">
                <div class="col-md-5">
                    <img src="images/Snacks/s3.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        KABAB STICK
                    </div>
                    <hr>
                    <div class="name">
                        BROWN FRIED CRISP
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Initial END -->
    <!-- pp -->
    <section class="nimko text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border">
                    <div class="titledry">
                        SAMOSAS
                    </div>
                    <img src="images/Snacks/s2.png" alt="" class="img-fluid">
                    <div class="name">
                        GO EASY ON THESE
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        CHICKEN SPICY PIZZA
                    </div>
                    <img src="images/Snacks/s1.png" alt="" class="img-fluid">
                    <div class="name">
                        CHICKEN . CHEESE . CAPSICUM
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- pp section ends -->
    <!-- sss -->
    <section class="drum text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border">
                    <div class="titledry">
                        Grilled Burger
                    </div>
                    <img src="images/Snacks/s7.png" alt="" class="img-fluid">
                    <div class="name">
                        CUCUMBER & SAUCE
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        Cheese Burger
                    </div>
                    <img src="images/Snacks/s8.png" alt="" class="img-fluid">
                    <div class="name">
                        SO CHEESEY
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- this end -->
    <!-- extra -->
    <section class="drum text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border">
                    <div class="titledry">
                        CHICKEN PIE
                    </div>
                    <img src="images/Snacks/s9.png" alt="" class="img-fluid">
                    <div class="name">
                        PERFECT ONE
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        CHICKEN PASTY
                    </div>
                    <img src="images/Snacks/ss.png" alt="" class="img-fluid">
                    <div class="name">
                        YOU EAT
                        ALL THE TIME
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- extra ends -->
    <section class="snack text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-5">
                    <img src="images/Snacks/s6.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        SHASHLIK STICK
                    </div>
                    <hr>
                    <div class="name">
                        LOVE IT
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <section class="snack text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-5">
                    <img src="images/Snacks/s4.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        ROSTED STEAM
                    </div>
                    <hr>
                    <div class="name">
                       SO HOT
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ppppp end -->   
    <?php
            require 'footer.php';
           ?> 
</body>

</html>