<?php
	session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add CutOffs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/addCollege.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<style>
		form{
			opacity: 0.9
		}
		.Name{
			margin-left: 30px;
		}
		.ID{
			margin-left: 56px;
		}
		.cutoff{
			margin-left: 87px;

		}
		.year{
			margin-left: 108px;
		}
	</style>

</head>
<body background="photes/00.jfif">
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
	<form action="addcut.php" method="POST">
		<fieldset>
			<legend>Add CutOffs</legend>
			<label>College Name : </label>
			<input type="text" name="name" class="Name" >
			<br>
			<label>College ID : </label>
			<input type="text" name="ID" class="ID" required>
			<br>
			<label> CutOff : </label>
			<input type="text" name="cutoff" class="cutoff" required>
			<br>
			<label> Year : </label>
			<input type="text" name="year" class="year" required> 
			<br>
			<input type="submit" name="butt" value="Submit" class="butt" required> 


		</fieldset>

	</form>

</body>
</html>