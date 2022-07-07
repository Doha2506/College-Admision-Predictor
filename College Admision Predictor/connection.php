<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mydatabase";

	$connection = new mysqli($servername,$username,$password,$database);
	

	if($connection->connect_error)
		die("Unable to connect" . $connection->connect_error);


?>
