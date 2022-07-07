<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Options</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/admChoises.css"  />
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
	
	<a href="addCollege.php">
		<img src="photes/8.jpg" alt="avatar" class="avatar">
	</a>
	

	<a href="addCutOff.php">
		<img src="photes/grade.jpg" alt="avatar" class="avatar">
	</a>
	

	<a href="updateCollege.php">
		<img src="photes/College-Update.jpg" alt="avatar" class="avatar">
	</a>
	
	
	<a href="deleteCollege.php">
		<img src="photes/del.png" alt="avatar" class="avatar">
	</a>

	<div class="div">
		Add College  &emsp;&emsp;&emsp;&emsp;  
		Add CuttOffs &emsp;&emsp;&emsp;&emsp;  
		Update College &emsp;&emsp;&emsp; 
		Delete College
	</div>


	<br>


	<a href="viewColleges.php" class="vc">
		<img src="photes/7.jpg" alt="avatar" class="avatar">
	</a>

	
	<a href="viewStudents.php">
		<img src="photes/stds.jpg" alt="avatar" class="avatar">
	</a>

	<a href="viewFeedback.php">
		<img src="photes/feedback.jpg" alt="avatar" class="avatar">
	</a>
	
	<div class="div2">
		View Colleges  &emsp;&emsp;&emsp;&emsp;&emsp;
		View Students &emsp;&emsp;&emsp;&emsp; 
		View Feedback   
	</div>
	

</body>
</html>