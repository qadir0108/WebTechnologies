<html>
<head>
<title>Student Admission System</title>
<script>

</script>
</head>

<body bgcolor="#DEDEDE">
<center>

<h1>Student Admission System</h1>
<?php

	// 1. Received POST parameters into variables
 	// 2. Connect with database
	// 3. Make INSERT query
	// 4. Execute query
	// 5. close connection
	// 6. Show message to User

	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$marks=$_POST['marks'];
	$gender= $_POST['gender'];
	$class=$_POST['class'];
	$pass= implode(',', $_POST['pass']); //$_POST['pass'];
	$info=$_POST['info'];
	
	// echo $rollno . "<br/>";
	// echo $name . "<br/>";
	// echo $marks . "<br/>";
	// echo $gender . "<br/>";
	// echo $class . "<br/>";
	// echo $pass . "<br/>";
	// echo $info . "<br/>";

	// for($i = 0; $i < count($pass); $i++) {
	// 	echo "<p>". $pass[$i] ."</p>";
	// }

	// //Working with MySQL 
	$conn = mysqli_connect('localhost', 'root', 'root', 'bzu');
	if (!$conn)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysqli_query($conn, "INSERT INTO admissions(rollno,name,marks,gender,class,pass,info) 
		VALUES ($rollno,'$name',$marks,'$gender','$class','$pass','$info')")
	or die(mysql_error());
	mysqli_close($conn);
	echo "<br/><b>Your admission has been saved successfully.</b><br/>"

	// Working with PostGreSQL
	// $host        = "host = 127.0.0.1";
   	// $port        = "port = 5432";
   	// $dbname      = "dbname = bzu";
   	// $credentials = "user = postgres password=postgres";
   	// $conn = pg_connect( "$host $port $dbname $credentials"  );
   	// if(!$conn) {
    //   echo "Error : Unable to open database<br/>";
   	// } else {
    //   echo "Opened database successfully<br/>";
	// }
	
	// $sql ="INSERT INTO admissions(rollno, name, marks, gender, class, pass, info) 
	// 	   VALUES($rollno, '$name', $marks, '$gender', '$class', '$pass', '$info' )";
	// //echo $sql;
	// $ret = pg_query($conn, $sql);
	// if(!$ret) {
	// 	echo pg_last_error($conn);
	// } else {
	// 	echo "<br/><b>Your admission has been saved successfully.</b><br/>";
	// }
	// pg_close($conn);
	
?>