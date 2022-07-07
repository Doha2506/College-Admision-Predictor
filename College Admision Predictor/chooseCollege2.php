<?php
	session_start();
	
	if(isset($_POST['cid'])){

		if(isset($_POST['submit'])){
			include 'connection.php';

			$sql = "SELECT CID from college";
			$result = $connection->query($sql);

			while($row = mysqli_fetch_assoc($result)) {

				$s = $_SESSION['pass'];
				$e = $_SESSION['email'];
				
				if($_POST['cid'] == $row['CID']){
					$c = $row['CID'];
					
					$sql2 = "UPDATE student set CID = '$c'
							 where SID = '$s' and Semail = '$e' ";
					$result2 = $connection->query($sql2);
					if(!$result2){
							die(mysqli_error($connection));	
						}

					$_SESSION['CID'] =  $_POST['cid'];

					break;
				}
			}
		}

?>
				


  <!DOCTYPE html>
<html>
<head>
	<title>Success</title>
<style>
	body
{
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;	
}
.butt{
	margin: 450px 50px 10px 350px;
	padding: 10px;
	font-size: 30px;
	font-style:oblique;
	background-color: #f8f0d6;
	border: 2px solid black; 
	width: 300px;
	height: 70px;
	border-radius: 10%;

}
</style>
</head>
<body background="photes/44.jpg">
	 
		<a href="std_choices.php">
		<input type="submit" name="butt" value="Continue" class="butt" >

</body>
</html>

<?php
		}else
			echo "ERROR !! ";
  ?>