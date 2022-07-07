<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete College</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/addCollege.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<style>
		fieldset,legend , li a:hover{
			opacity: 0.9;
			background-color:#e8e8e8;
		}
		.Name{
			margin-left: 15px;
		}
		.butt{
			color:white;
			background-color:#141414; 
		}
		
	</style>
</head>
<body background="photes/28.jpg">
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
	<form action="delCol.php" method="POST">
		<fieldset>
			<legend>Delete College</legend>
			<label>College ID : </label>
			<input type="text" name="ID" class="Name" required>
			<br>
			<input type="submit" name="submit" value="Delete" class="butt">
		</fieldset>
	</form>

</body>
</html>