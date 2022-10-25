<!--
1. Reservation Form
2. Javascript Validation
3. Database Insert when posted
4. Listing / View all records by SELECT *
 -->
<html>
<head>
<title>Ticket Reservation System</title>
<script>
function validate() {

 var regex = /^[a-zA-Z ]*$/;
 var passenger_name = document.getElementById("passenger_name").value;

 if(passenger_name == ''){
	alert('Passenger Name is required');
	return false;
 	}
	 // 123456789 false
	 
 if (!regex.test(passenger_name)) {
	alert('Passenger Name should be text only');
	return false;
 	}

 var passenger_cnic = document.getElementById("passenger_cnic").value;
 if(passenger_cnic == ''){
	alert('Passenger CNIC is required');
	return false;
 	}
 var isnum = /^\d+$/.test(passenger_cnic);
 if (!isnum) {
	alert('Passenger CNIC should be number only');
	return false;
 	} 

 var travel_from = document.getElementById("travel_from").value;
 if(travel_from == ''){
	alert('Travel from is required');
	return false;
 	}
 if (!regex.test(travel_from)) {
	alert('Travel From should be text only');
	return false;
 	}   	

 var travel_to = document.getElementById("travel_to").value;
 if(travel_to == ''){
	alert('Travel to is required');
	return false;
 	}
 if (!regex.test(travel_to)) {
	alert('Travel To should be text only');
	return false;
 	}  

 var travel_date = document.getElementById("travel_date").value;
 if(travel_date == ''){
	alert('Travel date is required');
	return false;
 	}

 var travel_time = document.getElementById("travel_time").value;
 if(travel_time == ''){
	alert('Travel time is required');
	return false;
 	}

 var no_of_seats = document.getElementById("no_of_seats").value;
 if(no_of_seats == ''){
	alert('Number of Seats is required');
	return false;
 	}
 var isnum = /^\d+$/.test(no_of_seats);
 if (!isnum) {
	alert('Number of Seats should be number only');
	return false;
 	} 

return true;
}
</script>
</head>

<body bgcolor="#DEDEDE">
<center>

<h1>Ticket Reservation System</h1>
<form method="post" onsubmit="return validate()">
<table border="1">
	<tr>
		<td colspan="2"><i>* All fields are required.</i></td>
	</tr>
	<tr>
		<td>Passenger Name:</td>
		<td><input type="text" id="passenger_name" name="passenger_name" size="26" maxlength="150"/></td>
	</tr>
	<tr>
		<td>Passenger CNIC:</td>
		<td><input type="text" id="passenger_cnic" name="passenger_cnic" size="26" maxlength="13"/></td>
	</tr>
	<tr>
		<td>Passenger Other Information:</td>
		<td><textarea id="passenger_info" name="passenger_info" maxlength="250"></textarea></td>
	</tr>
	<tr>
		<td>Travel From:</td>
		<td><input type="text" id="travel_from" name="travel_from" size="26" maxlength="50"/></td>
	</tr>
	<tr>
		<td>Travel To:</td>
		<td><input type="text" id="travel_to" name="travel_to" size="26" maxlength="50"/></td>
	</tr>
	<tr>
		<td>Travel Date:</td>
		<td><input type="text" id="travel_date" name="travel_date" size="26" maxlength="30"/> <pre>Format 2015-02-15</pre></td>
	</tr>
	<tr>
		<td>Travel Time:</td>
		<td><input type="text" id="travel_time" name="travel_time" size="26" maxlength="30"/><pre>Format 13:31:22</pre></td>
	</tr>
	<tr>
		<td>No of Seats:</td>
		<td><input type="text" id="no_of_seats" name="no_of_seats" size="26" maxlength="2"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Book"/></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
	$passenger_name=$_POST['passenger_name'];
	$passenger_cnic= $_POST['passenger_cnic'];
	$passenger_info=$_POST['passenger_info'];
	$travel_from=$_POST['travel_from'];
	$travel_to=$_POST['travel_to'];
	$travel_date = $_POST['travel_date'];
	$travel_time = $_POST['travel_time'];
	$no_of_seats=$_POST['no_of_seats'];
												
	mysqli_query($conn, "INSERT INTO bookings(passenger_name,passenger_cnic,passenger_info,travel_from,travel_to,travel_date,travel_time,no_of_seats) 
		 VALUES ('$passenger_name','$passenger_cnic','$passenger_info','$travel_from','$travel_to','$travel_date','$travel_time',$no_of_seats)")
	 or die(mysql_error());
	}
?>
</form>

<h2>All Reservations</h2>
<table border="1">
	
<tr><th>#</th><th>Passenger Name</th><th>Passenger CNIC</th><th>Passenger info</th>
<th>Travel From</th><th>Travel To</th><th>Travel Date</th><th>Travel Time</th><th># of seats</th>
<th>#</th><th>#</th></tr>

<?php
include("db.php");
$sql = "SELECT * FROM bookings";
$bookings=mysqli_query($conn, $sql)  or die(mysql_error());

while($booking = mysqli_fetch_array($bookings))
{
$id = $booking['booking_id'];	
echo "<tr>";	
echo "<td>" .$booking['booking_id']."</td>";
echo "<td>" .$booking['passenger_name']."</td>";
echo "<td>" .$booking['passenger_cnic']."</td>";
echo "<td>" .$booking['passenger_info']."</td>";
echo "<td>" .$booking['travel_from']."</td>";
echo "<td>" .$booking['travel_to']."</td>";
echo "<td>" .$booking['travel_date']."</td>";
echo "<td>" .$booking['travel_time']."</td>";
echo "<td>" .$booking['no_of_seats']."</td>";
echo "<td> <a href ='edit.php?booking_id=$id'>Edit</a></td>";
echo "<td> <a href ='delete.php?booking_id=$id'>Delete</a></td>";
echo "</tr>";
}
mysqli_close($conn);
?>

</table>
</center>
</body>
</html>
