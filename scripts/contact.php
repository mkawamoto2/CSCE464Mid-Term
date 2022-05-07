<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('127.0.0.1:3307', 'root', '','db_registration');

// get the post records
$txtFirstname = $_POST['txtFirstname'];
$txtLastname = $_POST['txtLastname'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`firstname`, `lastname`, `email`, `message`) VALUES ('$txtFirstname', '$txtLastname', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

header('Location: http://localhost/464website/pages/contact_confirmation.html');


?>