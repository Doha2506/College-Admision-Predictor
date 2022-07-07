<?php 
	
	include 'collegeClass.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$result;

		$coll =	new college();

		if(isset($_POST['submit1'])){

			$result = $coll->updateCollegeName($_POST['ID'],$_POST['newName']);
		}
		else if(isset($_POST['submit2'])){
			
			$result = $coll->updateCollegeEmail($_POST['ID'],$_POST['email']);
		}
		else if(isset($_POST['submit3'])){

			$result = $coll->updateCollegeAdress($_POST['ID'],$_POST['newAdress']);
		}
		
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
				margin:10px 10px 10px 300px;
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