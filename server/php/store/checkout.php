<?php
   session_start();
   require 'connection.php';
   if(!isset($_SESSION['email'])){
       header('location: login.php');
   }
   $user_id=$_SESSION['id'];
   $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
   $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
   $no_of_user_products= mysqli_num_rows($user_products_result);
   $sum=0;
   if($no_of_user_products==0){
       //echo "Add items to cart first.";
   ?>
<script>
   window.alert("No items in the cart!!");
</script>
<?php
   }else{
       while($row=mysqli_fetch_array($user_products_result)){
           $sum=$sum+$row['price']; 
      }
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="img/lifestyleStore.png" />
      <title>Projectworlds Store</title>
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
     
         <?php
            require 'header.php';
            ?>
            
         <br><br><br>
         
         <div class="maindiv">
            <div class="container">
               <div class="row">
            
            <div class="col-md-7 container" style="margin:auto;">
            
               <h4 class="my-4">
                  Billing Address
               </h4>
               <form class="billingform shadow">
                  <div class="form-row">
                     <div class="col-md-6 form-group" style=padding:0;>
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                        <div class="invalid-feedback">
                           Valid first name is required.
                        </div>
                     </div>
                     <div class="col-md-6 form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                        <div class="invalid-feedback">
                           Valid last name is required.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                  </div>
                  <div class="form-group">
                     <label for="adress">Address</label>
                     <input type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
                     <div class="invalid-feedback">
                        Please enter your shipping address.
                     </div>
                  </div>
                  <hr>
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="shipping-adress"> 
                     Shipping address is the same as my billing address
                     <label for="shipping-adress" class="form-check-label"></label>
                  </div>
                  <hr>
                  <h4 class="mb-4">Payment</h4>
                  <div class="form-check">
                     <input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
                     <label for="credit" class="form-check-label">Cash On Delivery</label>
                  </div>
                  <hr class="mb-4">
                  <a href="success.php?id=<?php echo $user_id?>" class="btn btn-outline-danger" style="margin-bottom: 10px;">Confirm Order</a>
               </form>
            </div>
            <div class="col-md-5 imgsection">
               <!-- <img src="images/checkoutbakery.jpg" alt="" class="img-fluid"> -->
            </div>
               </div>
            </div>
           
         </div>
         
         <?php
            require 'footer.php';
            ?>
   </body>
   
</html>