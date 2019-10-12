<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, 'Registration');
if(isset($_POST['sign_in']))
{

	$email = mysqli_real_escape_string($con,$_POST['email']);	
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$sql = mysqli_query($con, "SELECT email, password FROM users WHERE email = '".$email."' AND  password = '".$password."'");

	while($row = mysqli_fetch_assoc($sql))
	{
		$check_username = $row['email'];
		$check_password = $row['password'];
	}
	

	if($email == $check_username && $password == $check_password)
	{
		$sql = mysqli_query($con, "SELECT id FROM users WHERE email = '".$email ."'");
		$row1 = mysqli_fetch_assoc($sql);
		$id = $row1['id'];
		$_SESSION['id'] = $id;	
		include 'insertingwords.php';
	}

	else{
		echo "No match.";
	}

}


?>