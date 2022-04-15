<?php
// Start the session
session_start();
?>

<?php 
    $_SESSION["rollno"] = 123;

    echo $_SESSION["rollno"];
?>

<br/> Printing Session Array <br/>
<?php
print_r($_SESSION);
?>