<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navv.css"  />
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<style type="text/css">

	.navbar{
		margin-left: 60px;
	}
	li a:hover{
		background-color: #e4f7c2;
	}
	
	</style>
</head>
<body background="photes/54.jpg">
	<ul>
		<li><a href="homee.php" class="navbar">Home</a></li>
		<li><a href="news.php" class="navbar">News</a></li>
		<li><a href="usage.php" class="navbar">Usage</a></li>
		<li><a href="about.php" class="navbar">About</a></li>
	</ul>

	<div>
		Welcome, <br>
		&emsp;We will inform you about the minimum scores for colleges this year. <br>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;  
		Good Luck !

	</div>

	<table>
		<tr>
			<th>College Name</th>
			<th>College E-mail</th>
			<th>College Adress</th>
			<th>College cutoff</th>
			<th>Year</th>
		</tr>
 		<?php 
			include 'connection.php';

			$sql = "SELECT * FROM college ORDER BY CID asc";
			$result = $connection->query($sql);
			
			while($row = mysqli_fetch_assoc($result)) {   
				$ID = $row['CID']; 
		?>   
		<tr>
			<td> <?php echo $row['Cname'] ?></td>
			<td><?php echo $row['Cemail'] ?></td>
			<td><?php echo $row['address'] ?></td>

			<?php

				$sql2 = "SELECT cutoff FROM cutoff join college 
						where cutoff.C_ID =  $ID ";
				$result2 = $connection->query($sql2);

				$row2 = mysqli_fetch_assoc($result2);


			?>
			<td><?php echo $row2['cutoff']; ?></td>
		 	<td><?php echo date("Y"); ?></td>		
			
		<?php  

			}
		?>
			
		
		</tr>
	

	</table>

		 

	
		


	

</body>
</html>