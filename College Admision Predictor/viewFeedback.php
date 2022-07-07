<?php
	session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Colleges</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/viewColl.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<style >
	
	li a:hover{
		background-color: #f6e8d8;
	}

</style>
</head>
<body background="photes/42.jpg">
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

	<table>
		<tr>
			<th>Student Name</th>
			<th>Student ID</th>
			<th>His Post</th>
		</tr>
		<?php 
			include 'connection.php';

			$sql = "SELECT * FROM feedback ORDER BY SID asc";
			$result = $connection->query($sql);

			if(!$result){
					die(mysqli_error($connection));	
			}
					
			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
				$id = $row['SID'];
				$post = $row['post'];

				$sql2 = "SELECT Sname FROM student join feedback  
						on student.SID = feedback.SID 
				where student.SID = '$id' "; 
				
				$result2 = $connection->query($sql2);

				if(!$result2){
					die(mysqli_error($connection));	
				}
				$r = mysqli_fetch_assoc($result2);
				$name = $r['Sname'];

		?>   			
		<tr>
			<td><?php echo $name ?></td>
			<td> <?php echo $id ?></td>
			<td><?php echo $post ?></td>
			
		</tr> 				
			
		<?php  

			}

		?>

		


	</table>

</body>
</html>