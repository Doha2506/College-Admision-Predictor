<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Choose College</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navv.css"  />
	<link rel="stylesheet" type="text/css" href="css/chooseCollege.css">
	<style type="text/css">
		form{
			margin-top: 100px; 

		}


	</style>
</head>
<body background="photes/1.jpg">
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

	<form action="std_choices.php">
		<fieldset>
			<div>
				Hello <?php echo $_SESSION['username']; ?> ..
				Your Grage is <?php echo $_SESSION['Smark'] ?> ,  <br> 
				We are so sorry for telling you that you can't enroll with us because your grade is less than 50 !!<br>
				
				 Good Luck Next Year ..
			</div>

			 <input type="submit" name="submit" class="butt" value="Continue">

		</fieldset>

	</form>

</body>
</html>