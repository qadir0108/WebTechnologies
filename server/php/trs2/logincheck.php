<?php
// Start the session
session_start();
?>
<?php
if (isset($_POST['username'])) {

  $u = $_POST["username"];
  $p = $_POST["password"];

  include("db.php");
  $sql = "SELECT * FROM users WHERE username = '" . $u . "' AND password = '" . MD5($p) . "'";

  echo $sql;

  $result= mysqli_query($conn, $sql)  or die(mysql_error());
  $user = mysqli_fetch_array($result);

  if($user == null)
  {
    echo '<p style="color:red">Wrong username or password</p>';
  }
  else {
    $_SESSION["UserName"] = $u;
    $_SESSION["UserRole"] = $user['role'];
    header("Location: index.php");
  }
  mysqli_close($conn);

}
?>