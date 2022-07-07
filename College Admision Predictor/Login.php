<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/login.css"  />
		<link rel="stylesheet" href="css/navv.css"  />
		<style type="text/css">
				
			.navbar{
				margin-left: 60px;
			}
		</style>
	</head>
	<body background = "photes/4.jpg">
		
		<ul>
		<li><a href="homee.php" class="navbar">Home</a></li>
		<li><a href="news.php" class="navbar">News</a></li>
		<li><a href="usage.php" class="navbar">Usage</a></li>
		<li><a href="about.php" class="navbar">About</a></li>
		
	</ul>
		<form action = "chkLogin.php" method="POST" >
		<fieldset>
			<legend>Login</legend>
			<label>Email</label>
			<input type="text" name="email" class="email" placeholder="Write Your E-mail" required >
			<br>
			<label>Password</label>
			<input type="Password" name="password" class="pass" placeholder="Write Your Password" required >

			<br><br>
		<a class="fpass" href="forgotPass.php">Forgot Password</a>
			<button >Next</button>



		</fieldset>



</form>

		
	</body>
</html>
