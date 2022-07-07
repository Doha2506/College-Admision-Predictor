

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navv.css"  />
	<link rel="stylesheet" type="text/css" href="css/forgotPass.css">

	<style type="text/css">
		.navbar{
			margin-left: 60px;
		}
		li a:hover{
			background-color: #486488;
		}
	</style>
</head>
<body background="photes/57.jpg">
	<ul>
		<li><a href="homee.php" class="navbar" style="color: white">Home</a></li>
		<li><a href="news.php" class="navbar" style="color: white">News</a></li>
		<li><a href="usage.php" class="navbar" style="color: white">Usage</a></li>
		<li><a href="about.php" class="navbar" style="color: white">About</a></li>
	</ul>
	<form action="forgotPass2.php" method="POST">
		<fieldset>		
			<legend>Reset Password</legend>
			<label>E-mail : </label>
			<input type="text" name="email" class="email" placeholder="Write your E-mail" required>
			<br>
			<label>New Password :</label>
			<input type="text" name="newPass" class="pass" placeholder="Write new password" required>
			<br>
			<label>Confirm Password :</label>
			<input type="text" name="Cpass" class="Cpass" placeholder="Confirm new password" required>
			<br>
			<input type="submit" name="button" class="butt" value="Reset">

		</fieldset>
	</form>
</body>
</html>