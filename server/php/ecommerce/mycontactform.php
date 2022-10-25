<?php

include "config.php";

$myname=$_POST['customer_name'];
$myemail = $_POST['email'];
$mynumber = $_POST['number'];
$mysubject = $_POST['subject'];
$mymsg = $_POST['msg'];

$query = "INSERT  INTO contact(customer_name,email,number,subject,message)
Values ('$myname','$myemail','$mynumber','$mysubject','$mymsg')";
$result = mysqli_query($conn,$query) or die ("Insertion Faild");

// $email_from='$myemail';
// $email_body= "User Name: $myname.\n";
// 		"User Email: $myemail.\n";
// 		"Phone Number: $mynumber.\n";
// 		"Message: $mymsg.\n";

// $to="sanaahanif030@gmail.com";
// $headers="From: $email_from \r\n";
// $headers="Reply To: $myemail";

// mail($to,$email_body,$headers);

header("Location: index.php");
?>  