<?php 
	include 'connection.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST' ){
		
		$Email = $_POST['email'];
		$pass = $_POST['password'];

		$sql = "SELECT * FROM admin ";
		$result = $connection->query($sql);
	
		if(!$result){
			die(mysqli_error($connection));
		}


		$flag = 0;

		if (mysqli_num_rows($result) > 0) {
  			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
  				if($row['adm_name'] == $Email && $row['adm_pass'] == $pass){
  					$flag = 1;
  					header('Location: http://localhost/php_course/homee.php');
  				}
  				

  			}
  			if($flag == 0){   // can't do it
  				//$_SESSION['errors'] = array("Your username or password was incorrect.");
  				//$_SESSION['errors'] = "Your username or password was incorrect.";
  				echo "Wrong E-mail Or Password !! Try again .. ";
  				
  			}
		}else{
 			echo "0 results";
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
