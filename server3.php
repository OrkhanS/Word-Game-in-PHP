<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";

	//print_r($_SESSION);

	$con = mysqli_connect($servername, $username, $password,'Registration');
	
	if(isset($_POST['submit']))
	{
		$words = mysqli_real_escape_string($con, $_POST['word']);
		$words_az = mysqli_real_escape_string($con, $_POST['word2']);
		$user_id = $_SESSION['id'];

		$sql = "INSERT INTO words (az, eng, user_id) VALUES('$words', '$words_az', '$user_id')";
		include 'insertingwords.php';

		if (mysqli_query($con, $sql) === TRUE) 
		{
		    echo "New record created successfully";
		} 

		else
		{
		    echo "Error: " . $sql . "<br>" . mysqli_error($con);	
		}	
	}

?>