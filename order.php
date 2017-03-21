<?php
	
	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$price =  $_POST['pizzaType'];
	
	$topping = $_POST['topping'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];
	
	
	$toppingPrice = 0;
	foreach($topping as $value){
		
		$toppingPrice += $value;
	
	}
	
	$total = ($price * $size + $toppingPrice) * $quantity;
	$display = "";
	$display .= "Name:".$name;
	$display .= "</br>Telephone: ".$telephone;
	$display .= "</br>Topping: ".$toppingPrice;
	$display .= "</br>Size: ".$size;
	$display .= "</br>Quantity".$quantity;
	$display .= "</br>Final Price: ".$total;
	
	echo $display;
	setcookie('user',$name);
	
	
	echo "</br></br></br></br>";
	


	$name = $_GET['name'];
	$telephone = $_GET['telephone'];
	$icecream = $_GET['IcecreamType'];

	$display = "";
	$display = "Name: ".$name;
	$display = "</br>Telephone: ".$telephone;
	$display = "</br>Icecream: ".$icecream;
	
	echo $display;
	
	
	
			

	
?>

<a href="post.php">Order Again</a>
