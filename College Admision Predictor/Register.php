<?php 
	include 'connection.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST' ){
		$name = $_POST['name'];
		$SID = $_POST['ID'];
		$Email = $_POST['email'];
		$mark = $_POST['mark'];
		$_SESSION['username'] = $name;
		
		$chk = "SELECT * FROM student";
		$chk_result = $connection->query($chk);


		$flag = 0;
		if (mysqli_num_rows($chk_result) > 0) {
  			while($row = mysqli_fetch_assoc($chk_result)) {  // to put it in array
  				if($row['SID'] == $SID || $row['Semail'] == $Email ){   // can't do it
  					echo "The ID and the E-mail must be Unique !! Try Again .. ";

  					$flag = 1;
  				}
  			}
  		}

	if($flag == 0){ 
		$sql = "INSERT INTO `student` (`Sname`, `SID`, `Semail`, `mark`, `CID`) 
				VALUES ('$name', '$SID','$Email','$mark', '')";
		$result = $connection->query($sql);
	
		if(!$result){
			die(mysqli_error($connection));	
		}

		header('Location: http://localhost/php_course/Login.php');

	}

	}else{
		echo "You can't access this page directly";
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
					margin:10px 210px;
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
