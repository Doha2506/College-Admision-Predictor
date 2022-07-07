<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/viewColl.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
</head>
<style >
	
	li a:hover{
		background-color: #f6e8d8;
	}

</style>
<body background="photes/35.jpg">
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
			<th>Student E-mail</th>
			<th>Student Mark</th>
			<th>Student College</th>
		</tr>
		<?php 
			include 'connection.php';

			$sql = "SELECT * FROM student ORDER BY SID asc";   // select student data
			$result = $connection->query($sql);


					
			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
				$name = $row['Sname'];
				$SID = $row['SID'];
				$email = $row['Semail'];
				$mark = $row['mark'];
		
				// select studet college
				$sql2 = "SELECT Cname FROM college join student  
						on college.CID = student.CID 
				where student.SID = '$SID' and  student.Semail = '$email' "; 
				
				$result2 = $connection->query($sql2);

				if(!$result2){
					die(mysqli_error($connection));	
				}

				$r = mysqli_fetch_assoc($result2);
				
				if(isset($r['Cname']))
					$cName = $r['Cname'];
				else
					$cName = " - ";
				
		?> 


		<tr>
			<td> <?php echo $name ?></td>
			<td><?php echo $SID ?></td>
			<td><?php echo $email ?></td>
			<td><?php echo $mark ?></td>
			<td> <?php echo $cName ?></td>	
		</tr> 				
			
		<?php
			}
		  ?>


	</table>

</body>
</html>