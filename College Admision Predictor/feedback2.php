<?php 
	session_start();

	if(isset($_POST['feedback'])){
		include 'connection.php';

		$post = $_POST['feedback'];
		$SID = $_SESSION['pass'];

		$sql = "INSERT into feedback values ('$SID','$post')";
		$result = $connection->query($sql);

		if(!$result){
			die(mysqli_error($connection));	
		}

	}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Send Feedback</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/feedback.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	

	<style>
		form{
			font-size: 25px;
			margin: 120px 90px; 
			padding: 10px
		}
	</style>
</head>
<body background="photes/feed.png">
	<ul>
		<li><a href="homee.php" class="navbar">Home</a></li>
		<li><a href="news.php" class="navbar">News</a></li>
		<li><a href="usage.php" class="navbar">Usage</a></li>
		<li><a href="about.php" class="navbar">About</a></li>
		<li>
			<img src="photes/pro.jpg" alt="avatar" class="profile">
		</li>
		<li class="name">Hi <?php echo $_SESSION['username'] ?></li>
	</ul>

	<form class="mesj">
		<fieldset>
			<div>Thank you <?php echo $_SESSION['username'] ?> for communicating with us .
				We will send you on your E-mail ( <?php echo $_SESSION['email'] ?> ) if there're any changes .
				<br><br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;
			 Good Luck ! 

			</div>

		</fieldset>
	</form>

</body>
</html>