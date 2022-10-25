<?php
session_start();
?>

 <?php
    if(!isset($_SESSION['username']))
    {
        
        header("Location: login.php");
    }

?> 
    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

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

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container"> 
        <?php
        include "config.php";
        if(isset( $_GET['id'])){
        $myid = $_GET['id'];
        $mysq = "SELECT * from products where id = '{$myid}'";
        $myresult = mysqli_query($conn,$mysq);
        while($myproduct= mysqli_fetch_array($myresult)){

            $_SESSION["product"]=$myproduct['id'];
        ?>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="<?php echo "images/".$myproduct['image'];  ?>" alt="">
            <div class="content">
                <h3><?php echo $myproduct['product_name']?></h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="quan" value="1" id="quantityid">
                </form>
                <?php
                $myres = (intval($myproduct['price'])-intval($myproduct['discount']))/100;
                $myres = intval($myproduct['price'])-$myres;
                ?>
                <div class="price"><span style="text-decoration:none" id="fprice"><?php echo $myres?></span> <span id="myprice"><?php echo $myproduct['price']?></span> </div>
   
        </div>
        <?php
        }
    }
        ?>

    </div>
    <div class="cart-total">
        
        <h3> Total : <span id="gracetotel"></span> </h3>
        <h3> discount : <span id="discountotal" value="" name="mytotal"></span> </h3>
        <h3> subtotal : <span id="ftotal" ></span> </h3>
        <script>
            var myprice = document.getElementById("myprice").innerHTML;
            var fprice = document.getElementById("fprice").innerHTML;
            var dis = myprice-fprice;
            document.getElementById("gracetotel").innerHTML=myprice;
            var payable = document.getElementById("ftotal").innerHTML=fprice;
            document.getElementById("discountotal").innerHTML=dis;
            document.getElementById("quantityid").addEventListener("input",()=>{
              var mytotalpro = document.getElementById("quantityid").value;
              document.getElementById("gracetotel").innerHTML=myprice*mytotalpro;
              var payable=document.getElementById("ftotal").innerHTML=fprice*mytotalpro;
              document.getElementById("discountotal").innerHTML=dis*mytotalpro;
            });
                       
</script>

    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        
                            data-key="<?php  $publish_key ?>"
                            data-amount= "<?php $myres?>"
                            data-name=""
                            data-description=""
                            data-image=""
                            data-currency="USD"
                        >

    </script>
    </div>
        </div>
</section>


<!-- shopping cart section ends -->
















<!-- footer section starts  -->

<?php include 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>