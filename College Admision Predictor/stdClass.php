<?php 
	include 'connection.php';
	include 'log.php';
	session_start();


	// Student Class extends log Interface 
	class student extends log{
		private $name;
		public $pass;
		public $email;
		private $mark;
		private $CID;

		// imutable class
		public function __construct($name,$pass,$email,$mark){
			$this->name = $name;
			$this->pass = $pass;
			$this->email = $email;
			$this->mark = $mark;
			
			if($this->name == null && $this->mark == null){  // if login page
				$chkLogin = $this->login($email,$pass);
				if($chkLogin == true){
					header('Location: http://localhost/php_course/std_choices.php');
				}
				else{
					echo '<script>alert("We Do not have E-mail like this !! <br> Please check the E-mail and Password again .. ") </script> ';

					header('Location: http://localhost/php_course/error.html');	
				}
			}
			else  // if regester page
			{
				if($this->isExist($email,$pass) == false){ // if email and pass unique
					$this->addStd();
					header('Location: http://localhost/php_course/Login.php');
				}
				else{
					echo '<script>alert("You have an E-mail like this <br> You must change its passwrd and E-mail !!") </script>';

					header('Location: http://localhost/php_course/error.html');
				}
			} 
			
			
		}


		private function addStd(){
			$sql = "INSERT INTO student  
					VALUES ('$this->name', '$this->pass','$this->email','$this->mark','')";

			include 'connection.php';

			$result = $connection->query($sql);
	
			if(!$result){
				die(mysqli_error($connection));	
			}
		}


		private function isExist($email,$pass) : bool{
			include 'connection.php';

			$chk = "SELECT * FROM student";
			$chk_result = $connection->query($chk);

			if (mysqli_num_rows($chk_result) > 0) {
	  			while($row = mysqli_fetch_assoc($chk_result)) {  // to put it in array
	  				if($row['SID'] == $pass && $row['Semail'] == $email ){ 
	  					$this->name = $row['Sname'];
	  					$this->mark = $row['mark'];
	  					$this->CID = $row['CID'];
	  					return true;
	  				}
	  			}

	  		}
	  		return false;
		}

		
		public function login($email,$pass) : bool{  // not complete
			
			if($this->isExist($email,$pass) == true){
				$_SESSION['username'] = $this->name;  // save name
				$_SESSION['email'] = $email;          // save email
				$_SESSION['pass'] = $pass;            // save pass
				$_SESSION['Smark'] =$this->mark;      //save mark
	  			$_SESSION['CID'] = $this->CID;        //save CID
				return true;

			}else{
				return false;
			}
		}



		public function logout() : void{
			include 'logout.php';
		}

	
	}



?>
