<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

 print_r($_SESSION);
?>


		<form action="server3.php" method="post">
			Word-AZ <input type="text" name="word" placeholder="Enter a word"> <br>
			Word-EN  <input type="text" name="word2" placeholder="Enter translation"> <br>
			<button type="submit" name="submit" class="hello">Submit</button>
		</form>

		<form action="logout.php">
			<button type="submit" name="logout" class="hello" style="display: inline-block;">Log out</button>
		</form>

	<form action="oyun.php" method="post">
		<button type="submit" name="game" style="display: inline-block;">Play a Game</button>
	</form>

		<style>
			#hello{
				display: inline-block;
			}
		</style>
</body>
</html>