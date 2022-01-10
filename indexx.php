<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="login.php">Logout</a>
	<h1>jo</h1>

	<br>
	Hallo <?php echo $user_data['user_name']; ?>
</body>
</html>