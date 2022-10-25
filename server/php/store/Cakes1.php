
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
    <!-- Snack Section -->
    <section class="snack text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-5">
                    <img src="images/Dry cakes/1.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        Cakes
                    </div>
                    <hr>
                    <div class="name">
                     Dry Creamy & Chocolate
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Snack Section END -->
    <!-- nimko -->
    <section class="nimko text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border" >
                    <div class="titledry">
                        Dark Chocolate
                    </div>
                    <img src="images/Dry cakes/2.png" alt="" class="img-fluid">
                    <div class="name">
                    fill with Chocolate
                       </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        Mud Cake
                    </div>
                    <img src="images/Dry cakes/3.png" alt="" class="img-fluid">
                    <div class="name">
                        Soft & Creamy
                       </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- nimko section ends -->
    <!-- Drum stick Section -->
    <section class="drum text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border">
                    <div class="titledry">
                        MOUSSE CAKE
                    </div>
                    <img src="images/Dry cakes/4.png" alt="" class="img-fluid">
                    <div class="name">
                        CHOCOLATE DREAM CAKE
                    </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        Dry Cake
                    </div>
                    <img src="images/Dry cakes/5.png" alt="" class="img-fluid">
                    <div class="name">
                        Cold . Sweet . Icy
                    </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- sssss -->
    <section class="drum text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-6 right_border">
                    <div class="titledry">
                        Tea Cake
                    </div>
                    <img src="images/Dry cakes/7.png" alt="" class="img-fluid">
                    <div class="name">
                        Make a classic tea
                    </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        Plain Tea Cake
                    </div>
                    <img src="images/Dry cakes/8.png" alt="" class="img-fluid">
                    <div class="name">
                    A joyful tea
                       </div>
                       <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- sssss end -->
    <?php
             require 'footer.php';
           ?>
</body>

</html>