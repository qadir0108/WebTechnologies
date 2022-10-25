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
                    <img src="images/Bread/b2.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        Best Of Our Breads
                    </div>
                    <hr>
                    <div class="name">
                        Plain & Tasteful
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
                <div class="col-md-6 right_border">
                    <div class="titledry">
                    FRUIT SHEERMAL
                </div>
                    <img src="images/Bread/b3.png" alt="" class="img-fluid">
                    <div class="name">
                        So Delicious
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                    PLAIN SHEERMAL
                    </div>
                    <img src="images/Bread/b4.png" alt="" class="img-fluid">
                    <div class="name">
                        Best With Tea
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
                    TOAST
                    </div>
                    <img src="images/Bread/b5.png" alt="" class="img-fluid">
                    <div class="name">
                    Baked Bread
                </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                    GARLIC BREAD
                    </div>
                    <img src="images/Bread/b6.png" alt="" class="img-fluid">
                    <div class="name">
                    Classic Starter
                </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- sssss -->
    <section class="bc-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="images/Bread/b8.png" alt="" class="img-fluid">
                    <div class="busname">ROUND RUSK</div>
                </div>

                <div class="col-md-3"><img src="images/Bread/b10.png" alt="" class="img-fluid">
                    <div class="busname">FLAT RUSK</div>
                </div>
                <div class="col-md-3"><img src="images/Bread/b9.png" alt="" class="img-fluid">
                    <div class="busname">PLAIN SHEERMAL</div>
                </div>
                <div class="col-md-3"><img src="images/Bread/b14.png" alt="" class="img-fluid">
                    <div class="busname">FRUIT SHEERMAL</div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-3"><img src="images/Bread/b12.png" alt="" class="img-fluid">
                    <div class="busname">BRAWN BUN</div>
                </div>
                <div class="col-md-3"><img src="images/Bread/b13.png" alt="" class="img-fluid">
                    <div class="busname">BUTTER BUN</div>
                </div>
                <div class="col-md-3"><img src="images/Bread/b11.png" alt="" class="img-fluid">
                    <div class="busname">FRUIT BUN</div>
                </div>

                <div class="col-md-3"><img src="images/Bread/b15.png" alt="" class="img-fluid">
                    <div class="busname">PLAIN BUN</div>
                </div>

            </div>
        </div>
    </section>
    <!-- SSS END -->
    <section class="snack text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-5">
                    <img src="images/Bread/b1.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                    OUR DELICACY
                    </div>
                    <hr>
                    <div class="name">
                    Finest Form Of Bread
                   </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
            </div>
        </div>
    </section>
    <?php
             require 'footer.php';
           ?>
</body>

</html>