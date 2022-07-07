<?php
	include 'collegeClass.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$coll = new college();

		$result = $coll->addCutOff($_POST['name'],$_POST['ID'],$_POST['cutoff'],$_POST['year']);

		if($result == true)
			header('Location: http://localhost/php_course/sucess.php');	
		else
			echo "Sorry the ID is Wrong !! We Don't have College with this ID";


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
				margin:10px 10px 10px 200px;
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