<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ex1</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container"> 
		<h2>Order Icecream</h2>
		
		<form class="icecream" action="" method="GET">
			<input type="text" name="name" placeholder="name">
			<input type="text" name="telephone" placeholder="telephone">
			<select name="IcecreamType" id="IcecreamType">
				<option value="0" selected="selected"></option>
				<option value="25">Cup</option>
				<option value="24">Plain Cup</option>
				<option value="22">Sugar Cup</option>
				<option value="26">Waffle Cup</option>
			</select>
			<input type="submit" name="order" value="Place Order">
		</form>
		<p>  
		
		<?php
		
			$name = $_GET['name'];
			$telephone = $_GET['telephone'];
			$icecream = $_GET['IcecreamType'];

			$display = "";
			$display = "Name: ".$name;
			$display = "</br>Telephone: ".$telephone;
			$display = "</br>Icecream: ".$icecream;
			
		$cookie_name = "user";
		$cookie_value = "Jane Doe";
		$expire =  time() + (86400 * 30);
			
		if(isset($_GET['order']))
				// To store:
			$ids = array($name, $telephone, $icecream);
			setcookie('ids', serialize($ids));

			
		
			
		header("Location: order2.php");
		?>
		
		</p>
	</div>
</body>
</html>