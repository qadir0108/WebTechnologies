<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Phones</title>
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


    <section class="products">


        <h1 class="heading"> featured <span>Smart phones</span> </h1>

        <div class="box-container">
    

        <?php include 'config.php' ?>

    <?php 	$query = "SELECT * FROM products WHERE category_id='2'";

    $result = mysqli_query($conn, $query);

    
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
?>
            
        </div>
    
    </section>

    <!-- footer section starts  -->

    <?php include 'footer.php' ?>

<!-- footer section ends -->

<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
    
    </body>
    </html>
