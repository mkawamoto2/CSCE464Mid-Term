<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('127.0.0.1:3307', 'root', '','db_registration');

// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];
$cardNumber = $_POST['cardNumber'];
$securityCode = $_POST['securityCode'];
$expirationDate = $_POST['expirationDate'];

// database insert SQL code
$sql = "INSERT INTO `tbl_order` (`firstname`, `lastname`, `email`, `address`, `city`, `state`, `zipcode`, `cardnumber`, 
    `securitycode`, `expirationdate`) VALUES ('$firstName', '$lastName', '$email', '$address', '$city', '$state', 
    '$zipCode', '$cardNumber', '$securityCode', '$expirationDate')";

// insert in database 
$rs = mysqli_query($con, $sql);

header('Location: http://localhost/464website/pages/confirmation.html');

?>