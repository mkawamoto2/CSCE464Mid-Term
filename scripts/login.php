<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('127.0.0.1:3307', 'root', '','db_registration');

// // get the post records
$txtUsername = $_POST['txtUsername'];
$txtPassword = $_POST['txtPassword'];

$username_check_query = mysqli_query($con, "SELECT * FROM tbl_registration WHERE username = '{$txtUsername}' AND password = '{$txtPassword}'");
$rowCount = mysqli_num_rows($username_check_query);

// check if credentials exists
if($rowCount > 0) {
    header('Location: http://localhost/464website/pages/home.html');
} else {
    header('Location: http://localhost/464website/index.html');
}

?>