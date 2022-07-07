<?php
	session_start();

	$c = $_SESSION['CID'];

	function getCollegeName() : bool
	{
		
		$c = $_SESSION['CID'];

		if($c != 0){ // Student has a college

			include 'connection.php';

			// will return 1 value
			$sql = "SELECT Cname from college where CID = '$c' ";
			$result = $connection->query($sql);

			if(!$result){
				die(mysqli_error($connection));	
			}

			$row = mysqli_fetch_assoc($result);
				
			if(isset($row['Cname'])){
				$_SESSION['Cname'] =  $row['Cname'];	
			}
			return true; 

		}else
			return false; // Student still hasn't College

		
		
	}
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navv.css"  />
	<link rel="stylesheet" type="text/css" href="css/view.css">

</head>
<body background="photes/profile.jpg">

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

	
	<form action="vp.php" method="POST">
		<fieldset> 
			<img src="photes/pro.jpg" alt="avatar" class="photo">
			<br>
			<legend>Your Data</legend>

			<label>Name : </label>
			<input  type="text" class="Name"
					value="<?php echo $_SESSION['username'] ?>" readonly>
			<br>
			<label>E-mail : </label>
			
			<input type="text" class="email"
					value="<?php echo $_SESSION['email'] ?>" readonly>
			<br>
			<label>Password : </label>
			<input type="text" class="pass"
					value="<?php echo $_SESSION['pass'] ?>" readonly>
			<br>
			<label>Mark : </label>
			<input type="text" class="mark"
					value="<?php echo $_SESSION['Smark'] ?>" readonly>
			<br>

			<label>College Name : </label>

			<?php if(getCollegeName() == true) { ?>
			
			<input type="text" id="CID" class="cid"
					value='<?php echo $_SESSION['Cname'] ?>' readonly>
			
			<?php }else{  ?>

			<input type="text" id="CID" class="cid" value=" " readonly>

			<?php } ?>

			<br><br>

		</fieldset>

	</form>

	

</body>
</html>

