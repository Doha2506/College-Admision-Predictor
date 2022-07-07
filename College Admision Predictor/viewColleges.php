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
	<style>
		li a:hover{
			background-color: #f6e8d8;

		}
	</style>
</head>
<body background="photes/34.jpg">
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
			<th>College Name</th>
			<th>College ID</th>
			<th>College E-mail</th>
			<th>College Adress</th>
		</tr>
		<?php 
			include 'connection.php';

			$sql = "SELECT * FROM college ORDER BY CID asc";
			$result = $connection->query($sql);
					
			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
		?>   			
		<tr>
			<td> <?php echo $row['Cname'] ?></td>
			<td><?php echo $row['CID'] ?></td>
			<td><?php echo $row['Cemail'] ?></td>
			<td><?php echo $row['address'] ?></td>
		</tr> 				
			
		<?php  

			}

		?>

		


	</table>

</body>
</html>