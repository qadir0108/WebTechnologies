<?php
// Start the session
session_start();
?>

<!-- Print Logged In User Name -->
<?php
if (isset($_SESSION['UserName'])) {
    echo '<div style="position: absolute; top: 0px; right: 20px;">';
    echo '<a href="logout.php"><h3>' . $_SESSION["UserName"] . '</h3></a>';
    echo '</div>';
    echo '<a href="main.php">Main Page</a>';
}
?>

<!-- Print Cart Products -->
<br />
<h2>Cart</h2>
<br />
You are still logged in. See Products in Cart. 
<ol>
    <li>Product # 1</li>
    <li>Product # 2</li>
    <li>Product # 3</li>
    <li>Product # 4</li>
</ol>