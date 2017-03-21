<?php
	// USE database to store users and passwords
	// We use define just to examplify the login
	define('USERNAME', 'admin');
	define('PASSWORD', '123456');
	session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session</title>

	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<div class="container login">
		<form action="" method="post">
			<input type="text" name="user" placeholder="User">
			<input type="text" name="password" placeholder="Password">
			<input type="submit" value="Login" name="loginForm">
		</form>
		
		<p> 
			<?php
			
				if(isset($_POST['loginForm'])){ 
				
					$user = $_POST['user'];
					$password = $_POST['password'];
					
					if($user != USERNAME || $password != PASSWORD){ 
					
						echo "User or Password is invalid";
					}
					else{ 
					
						$_SESSION['user'] = $user;
						header("Location: login.php");
					}
				}
			
			?>
	
		</p>
		
	</div>	
</body>
</html>