<?php
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Send Feedback</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<link rel="stylesheet" type="text/css" href="css/feed.css">
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

	<form class="feed" action="feedback2.php" method="POST">
		<fieldset>
			<legend>Your Feedback</legend>
			<div>
				Dear <?php echo $_SESSION['username']; ?> , 
				<br>
				We hope you have intersted with our site . Please if you have any comments , write it to solve it quickly , and to garantee for you safe and confident site.
				<br> 
			</div>

			<textarea name="feedback" class="textarea" required></textarea>
			<br>
			<input type="submit" name="submit" class="butt" value="Submit">


		</fieldset>
	</form>

	


</body>
</html>