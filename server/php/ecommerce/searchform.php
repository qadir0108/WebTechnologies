<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<?php
if(isset($_POST['mysearchsubmit'])){
include "config.php";
// header("Location: http://localhost/ecommerce/index.php");
$str=$_POST['mysearch'];


$query="SELECT * from products where product_name like '%$str%' ";
$result= mysqli_query($conn,$query);


if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result)){
        
        ?>
        <section class="products">
<div class="box-container">
<div class="box">
            <div class="image">
                <img src="<?php echo "images/".$row['image'];  ?>" class="main-img" alt=" ">
                <img src="<?php echo "images/".$row['hover_image'];  ?>" class="hover-img" alt=" ">
                <div class="icons">
                    <a href="cart.php?id=<?php echo $row['id']?>" class="fas fa-shopping-cart" title="add to cart"></a>
                </div>
            </div>
            <div class="content">
                <div class="price"><?php echo $row['product_name'];  ?></div>
                <div class="price"> <?php echo $row['price'];  ?><span> <?php echo $row['discount'];  ?> %off </span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
    </section>

        <?php
    }
}

// }else{
//     <script>
//     alert("No data found");
// </script>
// <?php
// }
}


?>