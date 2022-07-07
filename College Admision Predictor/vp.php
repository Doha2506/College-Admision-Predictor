<?php

	session_start();

	include 'stdClass.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST' ){
 		//new student('',$_POST['password'],$_POST['email'],'');
		
	}

	public function viewProfile($email,$pass){
			$sql = "SELECT * from student";
			$result = $connection->query($sql);
			if (mysqli_num_rows($result) > 0) {
	  			while($row = mysqli_fetch_assoc($result)) {  // to put it in array
	  				if($row['SID'] == $pass && $row['Semail'] == $email ){ 
	  					$_SESSION['mark'] = $row['mark'];
	  					$_SESSION['CID'] = $row['CID'];
	  				}
	  			}

	  		}

		} 
