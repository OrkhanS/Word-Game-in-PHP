<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";

	$con = mysqli_connect($servername, $username, $password,'Registration');
	
	if(isset($_POST['submit']))
	{
		$sual = $_POST['sual'];
		$cavab = $_POST['cavab'];
	}
	$userid = $_SESSION['id']; 
	echo "User - ". $userid;
	$sql = mysqli_query($con, "SELECT `eng` FROM `words` WHERE user_id = '".$userid."'");
	$json = array();
	$json_answers = array();
	while($row = mysqli_fetch_assoc($sql))
	{
		$json[] = $row;
	}

	$sql = mysqli_query($con, "SELECT `az` FROM `words` WHERE user_id = '".$userid."'");
	while($row = mysqli_fetch_assoc($sql))
	{
		$json_answers[] = $row;
	}
	$json = json_encode($json);
	$json_answers = json_encode($json_answers);
	//print_r($json);
	$_SESSION['x'] = $json;
	$_SESSION['y'] = $json_answers;

	//print_r($json_answers);
	include 'oyun_main.php';
	

?>

