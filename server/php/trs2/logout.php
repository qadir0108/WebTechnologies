<?php
// Start the session
session_start();
?>
<?php
    $_SESSION["UserName"] = null;
    header("Location: login.php");
?>