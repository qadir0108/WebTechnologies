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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent" class="shadow">
                       <h1>Corporate Gifting.</h1>
                       <p>Perfect Gift Packs for your Family and Friends.</p>
                       <a href="products.php" class="btn btn-danger"> Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <br><br><br>
           <div class="container" id="mainarea">
               <div class="row">
                  <center> <h1>Most In Demand</h1></center>
                   <div class="col-xs-4">
                       <div  class="thumbnail shadow">
                           <a href="products.php">
                                <img src="images/drycake.png" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cakes</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail shadow">
                           <a href="products.php">
                               <img src="images/bread_img.png" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Breads</p>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail shadow">
                           <a href="products.php">
                               <img src="images/Pastry.png" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Pastries</p>
                                   <p>Choose among the best available in the world.</p>
                               </div>
                           </center>
                       </div>
                   </div>

                   
               </div>
           </div>
<br><br><br>
  
    <!-- Drycake Section -->
    <section class="drycake text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-7">
                    <div class="titledry">
                        Dry cake
                    </div>
                    <hr>
                    <div class="name">
                        Honey almond cake
                    </div>
                    <div class="whitetext">
                        Simple and sweet. We bake it
                        better for you.
                    </div>

                    <a href="Cakes1.php" type="button" class="btn btn-outline-danger"> Explore More </a>


                </div>
                <div class="col-md-5">
                    <img src="images/drycake.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Drycake Section END -->
    <!-- Chococake Section -->
    <section class="chococake text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-7">
                    <div class="titledry">
                        Chococake
                    </div>
                    <hr>
                    <div class="name">
                        Honey almond cake
                    </div>
                    <div class="whitetext">
                        Simple and sweet. We bake it
                        better for you.
                    </div>

                    <a href="Cakes1.php" type="button" class="btn btn-outline-danger"> Explore More </a>


                </div>
                <div class="col-md-5">
                    <img src="images/chocolate_brownie_Cake.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Chococake Section END -->

    <!-- Bread Section -->
    <section class="bread text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-7">
                    <div class="titledry">
                        Breads
                    </div>
                    <hr>
                    <div class="name">
                        Classical baking tradition
                    </div>
                    <a href="bread1.php" type="button" class="btn btn-outline-danger"> Explore More </a>
                </div>
                <div class="col-md-5">
                    <img src="images/bread_img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Bread Section END -->

    <!-- Pastry Section -->
    <section class="pastry text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-7">
                    <div class="titledry">
                        Pastry
                    </div>
                    <hr>
                    <div class="name">
                        Choco. Vanila
                    </div>
                    <a href="pastry1.php" type="button" class="btn btn-outline-danger"> Explore More </a>
                </div>
                <div class="col-md-5">
                    <img src="images/Pastry.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Pastry Section END -->

    <!-- Snack Section -->
    <section class="snack text-center">
        <div class="container">
            <div class="row valing">
                <div class="col-md-5">
                    <img src="images/snack.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="titledry">
                        Snacks
                    </div>
                    <hr>
                    <div class="name">
                     Fresh & Healthy
                    </div>
                    <a href="snacks1.php" type="button" class="btn btn-outline-danger"> Explore More </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Snack Section END -->
   
         
    <?php
            require 'footer.php';
           ?>

           
        </div>
    </body>
</html>