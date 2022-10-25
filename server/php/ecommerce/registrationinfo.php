<?php

include "config.php";

$myname=$_POST['username'];
$myemail = $_POST['email'];
$mypassword = $_POST['password'];
$myRpassword = $_POST['R_password'];


$pass=password_hash($mypassword, PASSWORD_BCRYPT);
$rpass=password_hash($myRpassword, PASSWORD_BCRYPT);
    $email="select * from register where email='$myemail'";

    $query=mysqli_query($conn, $email);

    $check_email=mysqli_num_rows($query);

    if($check_email > 0){
    ?>
    <script>
        alert("Email already exist");
    </script>
    <?php
    header("Location: register.php");
    }else{
    if($mypassword === $myRpassword)
    {
        $query = "INSERT  INTO register(username,email,password,R_password)
        Values ('$myname','$myemail','$pass','$rpass')";
        $result = mysqli_query($conn,$query) or die ("Insertion Faild");
        if($result)
        {
            ?>
            <script>
                alert("Registered Successfully");
            </script>
            <?php
            header("Location: login.php");
        }
        else
        {
            ?>
            <script>
                alert("Not Registered");
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script>
            alert("Password not match");
        </script>
        <?php
        header("Location: register.php");
    }

}

?>