<?php 
	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Usgae</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/navv.css">
	<link rel="stylesheet" type="text/css" href="css/usage.css">
	<style type="text/css">

		.navbar{
			margin-left: 60px;
		}
		
	</style>

<script type="text/javascript">
	var div1 = false, div2 = false;
	window.onload=function(){
 		document.getElementById("std").style.display='none';
 		document.getElementById("adm").style.display='none';
	}

	function showDiv1(){
		if(div2 == true){
			document.getElementById("adm").style.display='none';
			div2 = false;
		}
		document.getElementById("std").style.display='block';
		div1 = true;
	}
	
	function showDiv2(){
		if(div1 == true){
			document.getElementById("std").style.display='none';
			div1 = false;
		}

		document.getElementById("adm").style.display='block';
		div2 = true;

	}


</script>
</head>
<body background="photes/45.jpg">
	<ul>
		<li><a href="homee.php" class="navbar">Home</a></li>
		<li><a href="news.php" class="navbar">News</a></li>
		<li><a href="usage.php" class="navbar">Usage</a></li>
		<li><a href="about.php" class="navbar">About</a></li>
	</ul>

	<input type="button" id="button" value="Student Tips" onclick="showDiv1()" class="butt">
	<input type="button" id="button" value="Admin Tips" onclick="showDiv2()" class="butt">
	
	<form id="std" class="std">
		<fieldset>
			<legend>Student Tips</legend>
			<ol>
				<li class="tips">1. Make an account to our website.</li>
				
				<li class="tips">2. Log in to the email you just made.</li>
		
				<li class="tips">
					3. Choose the college you want based on your grade and your stage.
				</li>
			
				<li class="tips">4. Make Sure from your profile and your college.</li>
		
				<li class="tips">
					5. Give us Feedback of the website to always improve the service and answer all problems.
				</li>
				<li class="tips">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						 Thank you for using our website.</li>

			</ol>
		</fieldset>
	</form>

	

	<form id="adm" class="adm">
		<fieldset>
		<legend>Admin Tips</legend>
		<ol>
			<li class="tips">1. Log in to your email.</li>

			<li class="tips">2. Choose the operation you want to do.</li>

			<li class="tips">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					 Thank you for using our website.</li>
		
		</ol>
		</fieldset>
	</form>


	


</body>
</html>