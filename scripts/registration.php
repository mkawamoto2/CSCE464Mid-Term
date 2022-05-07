<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('127.0.0.1:3307', 'root', '','db_registration');

// get the post records
$txtEmail = $_POST['txtEmail'];
$txtUsername = $_POST['txtUsername'];
$txtPassword = $_POST['txtPassword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_registration` (`email`, `username`, `password`) VALUES ('$txtEmail', '$txtUsername', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

header('Location: http://localhost/464website/index.html');

?>