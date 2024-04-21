<?php
// Start the session
session_start();
?>
<?php

if (isset($_POST['UserName'])) {

    $u = $_POST["UserName"];
    $p = $_POST["Password"];

    if($u == 'admin' && $p == 'admin')
    {
        echo '<h1>Welcome ' . $u . '</h1>';
        $_SESSION["UserName"] = $u;
    }
    else 
    {
        echo '<p style="color:red">Wrong username or password</p>';
    }
}

?>

<!-- Print Logged In User Name -->
<?php
if (isset($_SESSION['UserName'])) {
    echo '<div style="position: absolute; top: 0px; right: 20px;">';
    echo '<a href="logout.php"><h3>' . $_SESSION["UserName"] . '</h3></a>';
    echo '</div>';
    echo '<a href="cart.php">View Cart</a>';
}
?>