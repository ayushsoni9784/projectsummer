<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'qwertyuiop','db_connect');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `login` (`username`, `password`) VALUES ('$username', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Records Inserted";
}
?>
