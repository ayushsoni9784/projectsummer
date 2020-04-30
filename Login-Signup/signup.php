<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'qwertyuiop','db_connect');

// get the post records
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `signup` (`fullname`, `email`, `username`, `password`) VALUES ('$fullname', '$email', '$username', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Records Inserted";
}
?>
