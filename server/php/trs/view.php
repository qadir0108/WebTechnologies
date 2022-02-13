<?php
require("db.php");
$id =$_REQUEST['booking_id'];
$sql = "SELECT * FROM bookings WHERE booking_id  = '$id'";
$result = mysqli_query($conn, $sql);
$booking = mysqli_fetch_array($result);

if (!$result) die("Error: Data not found..");

$passenger_name=$booking['passenger_name'];
$passenger_cnic= $booking['passenger_cnic'];	
$passenger_info=$booking['passenger_info'];
$travel_from=$booking['travel_from'];
$travel_to=$booking['travel_to'];
$travel_date=$booking['travel_date'];
$travel_time=$booking['travel_time'];
$no_of_seats=$booking['no_of_seats'];

if(isset($_POST['submit']))
{	
echo "posted!";
	$passenger_name=$_POST['passenger_name'];
	$passenger_cnic= $_POST['passenger_cnic'];
	$passenger_info=$_POST['passenger_info'];
	$travel_from=$_POST['travel_from'];
	$travel_to=$_POST['travel_to'];
	$travel_date = $_POST['travel_date'];
	$travel_time = $_POST['travel_time'];
	$no_of_seats=$_POST['no_of_seats'];

	mysqli_query($conn, "UPDATE bookings SET passenger_name ='$passenger_name', passenger_cnic ='$passenger_cnic',
		 passenger_info ='$passenger_info',travel_from ='$travel_from' ,travel_to ='$travel_to',
		 travel_date ='$travel_date',travel_time ='$travel_time' ,no_of_seats ='$no_of_seats'
		 WHERE booking_id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: index.php");
}
mysqli_close($conn); 

?>

<html>
<head>
<title></title>
</head>

<body bgcolor="#DEDEDE">
<center>
<form method="post">
<table border="1">

	<tr>
		<td>Passenger Name:</td>
		<td><input type="text" name="passenger_name" value="<?php echo $passenger_name ?>"/></td>
	</tr>
	<tr>
		<td>Passenger CNIC:</td>
		<td><input type="text" name="passenger_cnic" value="<?php echo $passenger_cnic ?>"/></td>
	</tr>
	<tr>
		<td>Passenger Other Information:</td>
		<td><textarea name="passenger_info"><?php echo $passenger_info ?></textarea></td>
	</tr>
	<tr>
		<td>From:</td>
		<td><input type="text" name="travel_from" value="<?php echo $travel_from ?>"/></td>
	</tr>
	<tr>
		<td>To:</td>
		<td><input type="text" name="travel_to" value="<?php echo $travel_to ?>"/></td>
	</tr>
	<tr>
		<td>Date:</td>
		<td><input type="text" name="travel_date" value="<?php echo $travel_date ?>"/> <pre>Format 2015-02-15</pre></td>
	</tr>
	<tr>
		<td>Time:</td>
		<td><input type="text" name="travel_time" value="<?php echo $travel_time ?>"/><pre>Format 13:31:22</pre></td>
	</tr>
	<tr>
		<td>No of Seats:</td>
		<td><input type="text" name="no_of_seats" value="<?php echo $no_of_seats ?>"/></td>
	</tr>
	<tr>
		<td><a href='index.php'>Home page</a></td>
		<td><input type="submit" name="submit" value="Update Booking"/></td>
	</tr>
</table>
</form>
</center>
</body>
</html>
