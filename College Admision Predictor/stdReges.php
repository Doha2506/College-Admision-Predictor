
<!DOCTYPE html>
<html>
<head>
	<title>Student Register Form </title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/stdRegester.css"  />
	<link rel="stylesheet" href="css/navv.css"  />
	<style type="text/css">
		.navbar{
			margin-left: 60px;
		}
	</style>
</head>
<body background="photes/2.jpg">
	<ul>
		<li><a href="homee.php" class="navbar">Home</a></li>
		<li><a href="news.php" class="navbar" >News</a></li>
		<li><a href="usage.php" class="navbar" >Usage</a></li>
		<li><a href="about.php" class="navbar">About</a></li>
		
	</ul>
	


	<form action ="reges.php" method="POST">
		<fieldset>
			<legend>Register</legend>

			<label>Name</label>
			<input type="text" name="name" class="sname" placeholder="Write Your Name" required >
			<br>
			<label>Identical Number</label>
		 	<input type="text" name="ID" class="ID" placeholder="Write Your ID" required >

			<br>
			<label>Email</label>
			<input type="text" name="email" class="email" placeholder="Write Your E-mail" required >
			<br>
			<label>Mark</label>
			<input type="text" name="mark" class="mark" placeholder="Write Your Mark" required >

			<br><br>
		
			<button >Submit</button>



		</fieldset>
	</form>



</body>
</html>