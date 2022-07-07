<?php 
	session_start();
	$grade = $_SESSION['Smark'];
	if($grade < 50){
		header('Location: http://localhost/php_course/chooseCollege3.php');	
	}
	$dateOfyear = date("Y");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Choose College</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navv.css"  />
	<link rel="stylesheet" type="text/css" href="css/chooseCollege.css">

</head>
<body background="photes/1.jpg">
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


	<form action="chooseCollege2.php" method="POST" >
		<fieldset>
			<div>
				
				Hello <?php echo $_SESSION['username']; ?> ..
				Your Grage is <?php echo $grade ?> ,  <br>
				
				<table>
					<tr>
						<th>College Name</th>
						<th>College E-mail</th>
						<th>College Adress</th>
						<th>College CutOff</th>
						<th>Year</th>
					</tr>
			<?php
				include 'connection.php';

				if($grade >= 90){
	
					echo "So We have shown you the colleges available for the first stage.";

					$sql = "SELECT Cname , CID , Cemail , address , cutoff , year 
							from college join cutoff 
							on college.CID = cutoff.C_ID 
							WHERE cutoff.cutoff >= 50 and cutoff.cutoff <= '$grade' 
							and cutoff.year = '$dateOfyear'" ;

					$result = $connection->query($sql);

					getData($result);
					//while($row = mysqli_fetch_assoc($result)) {  // to put it in array
			
				}else if($grade >= 70){ 

					echo "So We have shown you the colleges available for the second stage.";

					$sql2 = "SELECT Cname , CID , Cemail , address , cutoff , year 
							from college join cutoff 
							on college.CID = cutoff.C_ID 
							WHERE cutoff.cutoff >= 50 and cutoff.cutoff <= '$grade' 
							and cutoff.year = '$dateOfyear'" ;

					$result2 = $connection->query($sql2);

					getData($result2);

				}else if($grade >=50){ 

					echo "So We have shown you the colleges available for the third stage.";

					$sql3 = "SELECT Cname , CID , Cemail , address , cutoff , year 
							from college join cutoff 
							on college.CID = cutoff.C_ID 
							WHERE cutoff.cutoff >= 50 and cutoff.cutoff <= '$grade'
							and cutoff.year = '$dateOfyear'" ;

					$result3  = $connection->query($sql3);

					getData($result3);

				}
			
			?>
			<br> Please do not rush to choose a college.<br>
				 Good Luck !
			</div>

				


<?php
	function getData($result){
		include 'connection.php';
		if(!$result){
			die(mysqli_error($connection));	
		}
	
		while($row = mysqli_fetch_assoc($result)) {

			echo "<tr>";
			
			echo "<td>" . $row['Cname'] . "</td>";
			echo "<td>" . $row['Cemail'] . "</td>";	
			echo "<td>" . $row['address'] . "</td>";
			echo "<td>" . $row['cutoff'] . "</td>";
			echo "<td>" . $row['year'] . "</td>";

			echo "<td>  <input type='radio' name='cid' value = ' " . $row['CID'] . " ' >  </td>";
			
			echo "</tr>";	
			
		}
	}
	
?>

</table>
	<input type="submit" name="submit" class="butt" value="Submit">
	</fieldset>
	</form>



</body>
</html>

