<?php

	session_start();
		
	session_unset();
	session_destroy();
		

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Log Out</title>
 	<style >
		body
			{
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
							
			}
			input{
				padding: 10px;
				margin: 470px 10px 10px 50px;
				width: 230px;
				background-color: #ecdab3;
				font-style:oblique;
				font-size:30px;
				font-weight: bold;
				border:1px solid black; 
				
			}
			</style>
 </head>
 <body background="photes/51.jpg">
 
 	<a href="homee.php">
 	<input type="button" value="Logout">

 </body>
 </html>