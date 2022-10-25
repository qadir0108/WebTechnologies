<!-- 
1. DELETE WHERE
2. Redirect to main page
-->
<?php
	include("db.php");  
	$id =$_REQUEST['booking_id'];

	mysqli_query($conn, "DELETE FROM bookings WHERE booking_id = '$id'")
	or die(mysql_error());  	
	
	// Redirection
	header("Location: index.php");
?> 