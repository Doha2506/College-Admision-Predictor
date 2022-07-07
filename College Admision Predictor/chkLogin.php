<?php
	include 'stdClass.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' ){

 		$Email = $_POST['email'];
		$pass = $_POST['password'];

		$sql_admin = "SELECT * FROM admin ";
		$result = $connection->query($sql_admin);

		$sql_std = "SELECT * FROM student ";
		$result_std = $connection->query($sql_std);
	
	
		if(!$result){
			die(mysqli_error($connection));
		}

		if(!$result_std){
			die(mysqli_error($connection));
		}


		$flag = 0;

		if (mysqli_num_rows($result) > 0) { // if admin
  			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
  				if($row['adm_name'] == $Email && $row['adm_pass'] == $pass){
  					$flag = 1;
  					session_start();
  					$_SESSION['username'] = $Email;
  					$_SESSION['pass'] = $pass;
  					header('Location: http://localhost/php_course/adm_choics.php');
  				}
  			}
		}
		if(mysqli_num_rows($result_std) > 0){ // if student
			while($row = mysqli_fetch_assoc($result_std)) {  // to put it in array
  				if($row['Semail'] == $Email && $row['SID'] == $pass){
  					$flag = 1;
  					new student('',$_POST['password'],$_POST['email'],'');
  				}
  			}
		}

		if($flag == 0){
  			echo "Wrong E-mail Or Password !! Try again .. ";			
  		}
	
		
	}
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>ERROR 404</title>
			<style >
		 		body
				{
					font-style:oblique;
					font-size:25px;
					font-weight: bold;
					margin:10px 290px;
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
