<?php

$cookie_name = "user";
$cookie_value = "John Doe";
$expire =  time() + (86400 * 30);

// remove Cookie
// setcookie("user", "", time() - 3600);

	setcookie($cookie_name,$cookie_value);
	if($_COOKIE['user']){ 
		header('Location: post.php');
	}

?>

<h1>Welcome to our page</h1>

<p>
	Do you want to <a href="post.php">order</a> a pizza
</p>