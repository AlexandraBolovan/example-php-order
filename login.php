<?php

	session_start();
	
	if(!$_SESSION['user']){ 
		header("Location : session.php");
	}

		echo "Hello,".$_SESSION['user'];
		
		
		echo "</br>You cannot see if you don't have an account";
		echo "</br>You cannot see if you don't have an account";
		echo "</br>You cannot see if you don't have an account";
?>

<a href="logout.php">Log out</a>