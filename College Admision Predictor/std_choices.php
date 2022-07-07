<?php
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Options</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/std.css"  />
	<link rel="stylesheet" href="css/navv.css"  />

</head>
<body>
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

	


	<a href="chooseCollege.php" >
		<img src="photes/choose college.jpg" alt="avatar" class="avatar">
	</a>

	<a href="viewProfile.php">
		<img src="photes/0.png" alt="avatar" class="avatar">
	</a>
	
	<a href="Feedback.php">
		<img src="photes/feed.png" alt="avatar" class="avatar">
	</a>

	<div class="div">
		&emsp;
		Choose College &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;
		View Profile &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Send Feedback   		 
	</div>

</body>
</html>