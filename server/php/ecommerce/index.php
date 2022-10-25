<?php
session_start();
?>

<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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


<!-- home section starts  -->

<section class="home">
<div class="swiper-wrapper">

    <?php 	$query = " SELECT * FROM products WHERE category_id='7' ";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0){

        while($product= mysqli_fetch_array($result)){
    
            ?>

            <div class="swiper home-slider">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="<?php echo "images/".$product['image'];  ?>" alt="">
                    </div>

                    <div class="content">
                        <span>Flat 50% off</span>
                        <h3><?php echo $product['product_name'];  ?></h3>
                        <a href="cart.php?id=<?php echo $product['id']?>" class="btn">shop now</a>
                    </div>
               
            </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <?php
        }
    }
    ?>
 </div>
</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">
    <?php 	$query = "SELECT * FROM products WHERE category_id='9'";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

if($num > 0){

    while($product= mysqli_fetch_array($result)){
    
        ?>
        <div class="box" target="_self">
            <img src="<?php echo "images/".$product['image'];  ?>" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="cart.php?id=<?php echo $product['id']?>" class="btn">shop now </a>
            </div>
        </div>
        <?php
    }
}
?>
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->

<section class="arrivals">

    <h1 class="heading"> new <span>arrivals</span> </h1>

    <div class="box-container">

<?php 	$query = "SELECT * FROM products WHERE category_id='6'";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

if($num > 0){

    while($product= mysqli_fetch_array($result)){
    
        ?>
        <div class="box">
            <div class="image">
                <img src="<?php echo "images/".$product['image'];  ?>" class="main-img" alt="">
                <img src="<?php echo "images/".$product['hover_image'];  ?>" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3><?php echo $product['product_name'];  ?></h3>
                <div class="price"> <?php echo $product['price'];  ?> <span><?php echo $product['discount'];  ?> %off</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
</div>

</section>

<!-- arrivals section ends -->
















<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>