<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, 'Registration');
if(isset($_POST['sign_up']))
{
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$surname = mysqli_real_escape_string($con,$_POST['surname']);
	$password = mysqli_real_escape_string($con,$_POST['password']);


	$sql = "INSERT INTO users (email, name, surname, password) 
		VALUES('$email', '$name', '$surname', '$password')";

	if (mysqli_query($con,$sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	include 'login.php';
		
}

?>