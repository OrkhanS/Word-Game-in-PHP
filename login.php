<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="server2.php" method="post">
	Email: <input type="email" name="email" placeholder="Enter your email" required> <br>
	Password: <input type="password" name="password" required>
    <button type="submit" name="sign_in">Sign in</button>
</form>

</body>
</html>