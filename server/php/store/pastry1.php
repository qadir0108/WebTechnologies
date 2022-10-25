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
                    <img src="images/Pastry/p1.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        Pastry
                    </div>
                    <hr>
                    <div class="name">
                        Finest Made
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
                        ROASTED NUTS
                    </div>
                    <img src="images/Pastry/p2.png" alt="" class="img-fluid">
                    <div class="name">
                        WALNUT FUDGE
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        ROASTED NUTS
                    </div>
                    <img src="images/Pastry/p3.png" alt="" class="img-fluid">
                    <div class="name">
                        HONEY ALMOND
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
                        Twin bro
                    </div>
                    <img src="images/Pastry/p4.png" alt="" class="img-fluid">
                    <div class="name">
                        COCONUT PASTRY
                    </div>
                    <a href="products.php" type="button" class="btn btn-outline-danger"> Buy Now </a>
                </div>
                <div class="col-md-6">
                    <div class="titledry">
                        Twin Bro
                    </div>
                    <img src="images/Pastry/p5.png" alt="" class="img-fluid">
                    <div class="name">
                        CHEESE PASTRY
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
                    <img src="images/Pastry/pp.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        Choco Bombs
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
    <!-- ppppp end -->
    <!-- Grid -->
    <section class="pc-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="images/Pastry/pg1.png" alt="" class="img-fluid">
                    <div class="psname">STRAWBERRY ICING</div>
                </div>

                <div class="col-md-3"><img src="images/Pastry/pg2.png" alt="" class="img-fluid">
                    <div class="psname">VANILLA ICING</div>
                </div>
                <div class="col-md-3"><img src="images/Pastry/pg3.png" alt="" class="img-fluid">
                    <div class="psname">CHOCOLATE ICING</div>
                </div>
                <div class="col-md-3"><img src="images/Pastry/pg4.png" alt="" class="img-fluid">
                    <div class="psname">COFFEE FUDGE</div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-3"><img src="images/Pastry/pg5.png" alt="" class="img-fluid">
                    <div class="psname">CHOCOLATE CHIP MOUSSE</div>
                </div>
                <div class="col-md-3"><img src="images/Pastry/pg6.png" alt="" class="img-fluid">
                    <div class="psname">BLUEBERRY MOUSSE</div>
                </div>
                <div class="col-md-3"><img src="images/Pastry/pg7.png" alt="" class="img-fluid">
                    <div class="psname">STRAWBERRY MOUSSE</div>
                </div>

                <div class="col-md-3"><img src="images/Pastry/pg8.png" alt="" class="img-fluid">
                    <div class="psname">CHOCOLATE MOUSSE</div>
                </div>

            </div>
        </div>
    </section>
    <!-- grid end -->
    <?php
          require 'footer.php';
           ?>
</body>

</html>