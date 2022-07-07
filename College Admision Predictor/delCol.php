<?php
	include 'collegeClass.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$coll = new college();
		
		$result = $coll->deleteCollege($_POST['ID']);
		if($result == true)
			header('Location: http://localhost/php_course/sucess.php');	
		else
			echo "We don't have college with this ID";

	}



  ?>


 <!DOCTYPE html>
<html>
	<head>
		<title>ERROR</title>
		<style >
			body
			{
				font-style:oblique;
				font-size:25px;
				font-weight: bold;
				margin:10px 10px 10px 340px;
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
							
			}
			</style>
	</head>
	<body background="photes/error.png">

	</body>
</html>

