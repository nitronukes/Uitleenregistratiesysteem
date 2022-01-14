<?php 

session_start();

	include("configure.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//iets word gepost
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//lezen van database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Apparaten overzicht.php");
						die;
					}
				}
			}
			//bij verkeerd wachtwoord of username krijg je een melding
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head> <br> <br> <br>
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
    
	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #005da4;
		border: none;
	}

	#box{

		background-color: #505050;
		box-shadow: 0px 25px 25px rgb(51, 51, 51);
		margin: auto;
		width: 300px;
		padding: 20px;
		border-radius:5px;
	}
	
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input placeholder="gebruikersnaam" id="text" type="text" name="user_name"><br><br>
			<input placeholder="wachtwoord" id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<p class="login-tekst"> ben je geen docent? <a class="geen-docent" href="publiek_overzicht.php">klik hier</a><br><br> </p>
		</form>
	</div>
</body>
</html>