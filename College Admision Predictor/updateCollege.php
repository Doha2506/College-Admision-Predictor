<?php 
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update College</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/addCollege.css">
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<style type="text/css">
		.update{
			width: 240px;
			height: 50px;
			background-color:#f7e4dd;	
			border:2px solid black;
			margin: 40px 10px 30px 70px;
			padding: 10px;
			font-style:oblique;
			font-size:20px;
			font-weight: bold;
		}
		fieldset,legend,li a:hover,.butt{
			background-color:#f7e4dd;	

		}

	</style>

	<script type="text/javascript">
		var from1 = false , form2 = false, form3 =false;
	window.onload=function(){
 		document.getElementById("updName").style.display='none';
 		document.getElementById("updEmail").style.display='none';
 		document.getElementById("updAdress").style.display='none';

	}

	function showForm1(){

		if(form2 == true){ // hide form 2
			document.getElementById("updEmail").style.display='none';
			from1 = false;
		}  

		if(form3 == true){ // hide form 3
			document.getElementById("updAdress").style.display='none';
			form3 = false;
		} 

		//show form 1
	 	document.getElementById("updName").style.display='block';
	 	form1 = true;
	}

	function showForm2(){
		
		if(form1 == true){ // hide form 1
			document.getElementById("updName").style.display='none';
			from1 = false;
		}

		if(form3 == true){ // hide form 3
			document.getElementById("updAdress").style.display='none';
			form3 = false;
		} 

		// show form 2
 		document.getElementById("updEmail").style.display='block';
 		form2 = true;
		
 		
	}
	function showForm3(){
		
		if(form1 == true){ // hide form 1
			document.getElementById("updName").style.display='none';
			from1 = false;
		}  

		if(form2 == true){ // hide form 2
			document.getElementById("updEmail").style.display='none';
			form2 = false;
		} 

		// show form 3 
 		document.getElementById("updAdress").style.display='block';
 		form3 = true;
		
	}
</script>
</head>
<body background="photes/update-t.jpg">
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
	
	<input type="button" id="button" value="Update Name" onclick="showForm1()" class="update">
	<input type="button" id="button" value="Update E-mail" onclick="showForm2()" class="update">
	<input type="button" id="button" value="Update Adress" onclick="showForm3()" class="update">


	<form id="updName" action="updateColl.php" method="POST">
		
		<fieldset>
			<legend>Update Name</legend>
			<label>College ID : </label>
			<input type="text" name="ID" required>
			<br>
			<label>New Name:</label>
			<input type="text" name="newName" required>
			<input type="submit" name="submit1" value="Submit" class="butt" >
		</fieldset>
</form>
	
	<br>
	<form id="updEmail" action="updateColl.php" method="POST">
		<fieldset>
			<legend>Update Email</legend>
			<label>College ID : </label>
			<input type="text" name="ID" required>
			<br>
			<label>New E-mail:</label>
			<input type="text" name="email" required>
			<input type="submit" name="submit2" value="Submit" class="butt">
		</fieldset>
	
	<br>
	</form>
	<form id="updAdress" action="updateColl.php" method="POST">
		<fieldset>
			<legend>Update Adress</legend>
			<label>College ID : </label>
			<input type="text" name="ID" required>
			<br>
			<label>New Adress:</label>
			<input type="text" name="newAdress" required>
			<input type="submit" name="submit3" value="Submit" class="butt">
		</fieldset>
	</form>



</body>

</html>