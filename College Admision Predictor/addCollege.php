<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add College</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/addCollege.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
</head>

<body background="photes/5.jpg">
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
	
	<form action="addColl.php" method="POST">
		<fieldset>
			<legend>Add College</legend>
			<label> Name : </label>
			<input type="text" name="name" class="Name" required>
			<br>
			<label> ID : </label>
			<input type="text" name="ID" class="ID" required>
			<br>
			<label> E-mail : </label>
			<input type="text" name="email" class="email" required> 
			<br>
			<label> Adress : </label>
			<input type="text" name="adress" class="adress" required>
			<br>
			<input type="submit" name="butt" value="Submit" class="butt">


		</fieldset>
	</form>

</body>
</html>
