<?php
	include("db.php");  
	$id =$_REQUEST['booking_id'];

	mysqli_query($conn, "DELETE FROM bookings WHERE booking_id = '$id'")
	or die(mysql_error());  	
	
	header("Location: index.php");
?> 