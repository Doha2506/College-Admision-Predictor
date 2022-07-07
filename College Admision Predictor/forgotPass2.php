<?php
	include 'connection.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$Email = $_POST['email']; // store the email

		if($_POST['Cpass'] != $_POST['newPass']) { // if new Password != Confirm password
			echo "Confirm Password must be equal to New Password !!";
		}
		else{ // if new Password == Confirm password
			$sql = "SELECT adm_name from admin";
			$result = $connection->query($sql);

			$sql2 = "SELECT * from student";
			$result2 = $connection->query($sql2);

			if(!$result){
				die(mysqli_error($connection));
			}

			if(!$result2){
				die(mysqli_error($connection));
			}

			$flag = false;

			// if admin
			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
  				if($row['adm_name'] == $Email){
  					$_SESSION['username'] = $row['adm_name'];
  					$newPass = $_POST['newPass'];

  					$update_sql ="UPDATE admin SET adm_pass='$newPass'
  								 WHERE adm_name = '$Email'";
  					$udate_result = $connection->query($update_sql);

  					$flag = true;

  					header('Location: http://localhost/php_course/adm_choics.php');
  				}
  				
  			}

  			// if student
  			while($row = mysqli_fetch_assoc($result2)) {  // to put it in array
  				if($row['Semail'] == $Email){
  					
  					$_SESSION['username'] = $row['Sname'];
  					$_SESSION['pass'] = $_POST['newPass'];
  					$_SESSION['email'] = $row['Semail'];
  					$_SESSION['Smark'] = $row['mark'];
  					$_SESSION['CID'] = $row['CID'];

  					$id = $row['SID'];

  					$newPass = $_POST['newPass'];

  					$update_sql ="UPDATE student SET SID='$newPass'
  								 WHERE Semail = '$Email'";
  					$udate_result = $connection->query($update_sql);

  					$update_sql2 ="UPDATE feedback SET SID='$newPass'
  								 WHERE SID = '$id'";
  					$udate_result2 = $connection->query($update_sql2);

  					$flag = true;

  					header('Location: http://localhost/php_course/std_choices.php');
  				}
  			}
  			if($flag == false){
  				echo "We don't have this E-mail .. Please Try Again !!";
  			}
  				

		}
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
				margin-left:270px;
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