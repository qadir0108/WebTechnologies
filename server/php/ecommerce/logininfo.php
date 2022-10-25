<?php
session_start();
include "config.php";
if(isset($_POST['submit'])){
    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];
    
        $query="select * from register where email='$myemail'";
    
        $result=mysqli_query($conn, $query);
    
        $check_email=mysqli_num_rows($result);
    
    if($check_email){
    
        $email_pass=mysqli_fetch_array($result);
        $Db_pass=$email_pass['password'];

        $_SESSION["username"]=$email_pass['email'];
        
        
        $pass_decode=password_verify($mypassword,$Db_pass);
    
        if($pass_decode){
            ?>
            <script> 
                alert("Login Successfully");
            </script>
            <?php
            if(isset($_SESSION["username"]))
            {
                header("Location: products.php");
            }
        }else{
            echo '<div class="alert alert-danger"> Password Incorrect </div>';
            header("Location: login.php");
        }
    }else{
        ?>
        <script>
            alert("Invalid Email");
        </script>
        <?php
        header("Location: login.php");
        }
}

?>  