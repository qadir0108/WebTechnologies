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
    <title>products</title>

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

<!-- category section starts  -->

    <section class="category">

        <h1 class="heading"> Shop by <span>category</span> </h1>

        <div class="box-container">

        <a href="Television.php" class="box" target="_self">
                <img src="images/cat_img1.png" alt="">
                <h3>Televisions</h3>
            </a>

            <a href="smartphones.php" class="box" target="_self">
                <img src="images/cat_img2.png" alt="">
                <h3>Smartphones</h3>
            </a>

            <a href="smartwatches.php" class="box" target="_self">
                <img src="images/cat_img3.png" alt="">
                <h3>Smartwatches</h3>
            </a>

            <a href="camera.php" class="box" target="_self">
                <img src="images/cat_img4.png" alt="">
                <h3>Camera</h3>
            </a>

        </div>

    </section>

<!-- category section ends -->

<!-- products section starts  -->

<section class="products">

    <h1 class="heading"> featured <span>products</span> </h1>
    <div class="box-container">

    <?php 	$query = " SELECT * FROM products WHERE category_id='5' ";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0){
    
        while($product= mysqli_fetch_array($result)){
        
         ?>

            <div class="box">
            <div class="image">
                <img src="<?php echo "images/".$product['image'];  ?>" class="main-img" alt=" ">
                <img src="<?php echo "images/".$product['hover_image'];  ?>" class="hover-img" alt=" ">
                <div class="icons">
                    <a href="cart.php?id=<?php echo $product['id']?>" class="fas fa-shopping-cart" title="add to cart"></a>
                </div>
            </div>
            <div class="content">
                <div class="price"><?php echo $product['product_name'];  ?></div>
                <div class="price"> <?php echo $product['price'];  ?><span> <?php echo $product['discount'];  ?> %off </span></div>
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
<!-- products section ends -->

<!-- product banner section starts  -->



<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>

    <div class="box-container">

    <?php 	$query = " SELECT * FROM products WHERE category_id='8'  ";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0){

        while($products= mysqli_fetch_array($result)){
    
         ?>
            <div class="box">
            <img src="<?php echo "images/".$products['image'];  ?>" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>Flat 50% off</h3>
                <a href="cart.php?id=<?php echo $products['id']?>" class="btn">shop now</a>
            </div>
            <?php
        }
    }
    ?>
</div>  
</section>

<!-- product banner section ends -->



<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->

    <!-- swiper js link      -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>