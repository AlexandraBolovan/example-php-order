<?php
	$serialized = $_COOKIE['ids'];
	$ids = unserialize($serialized);

	header("Location : order.php");
?>