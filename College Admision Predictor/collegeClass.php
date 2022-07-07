<?php 
	include 'connection.php';

	/**
		 * College Class
		 */
		class college
		{
			private $name;
			private $ID;
			private $email;
			private $adress;
			private $cutOff;
			private $year;

			
			function __construct()
			{
				
			}

			public function addCollege($name,$ID,$email,$adress) : bool {
				$this->name = $name;
				$this->ID = $ID;
				$this->email = $email;
				$this->adress = $adress;

				include 'connection.php';
				
				if($this->chkCollege($this->ID) == false){  // if ID unique 
					$sql = "INSERT into college 
						values('$this->name','$this->ID','$this->email','$this->adress')";
					$result = $connection->query($sql);
	
					if(!$result){
						die(mysqli_error($connection));	
					}
					return true;

				}else{ // if ID isn't unique
					return false;
				}	
			}

			public function addCutOff($name,$ID,$cutOff,$year) : bool{
				$this->name = $name;
				$this->ID = $ID;
				$this->cutOff = $cutOff;
				$this->year = $year;

				if($this->chkCollege($this->ID) == true){  // if the ID exists in the database
					include 'connection.php';
				
					$sql = "INSERT into cutoff 
							values('$this->ID','$this->cutOff','$this->year')";
					$result = $connection->query($sql);
		
					if(!$result){
						die(mysqli_error($connection));	
					}

					return true;

				}else{ // if the ID is not exit in the database
					return false;
				}
			}

				
			public function chkCollege($ID): bool{
				include 'connection.php';

				$chk = "SELECT * FROM college";
				$chk_result = $connection->query($chk);
					
				if (mysqli_num_rows($chk_result) > 0) {
			  		while($row = mysqli_fetch_assoc($chk_result)) {  // to put it in array
			  			if($row['CID'] == $ID ){ 
			  				return true;
			  			}
			  		}

			  	}
			  	return false;
			}

			public function updateCollegeName($ID,$name) : bool{
				$this->ID = $ID;
				$this->name = $name;

				if($this->chkCollege($this->ID) == true){ // if the ID exists in the database
					include 'connection.php';

					$sql = "UPDATE college set Cname = '$this->name' 
							where CID = '$this->ID' ";
					$result = $connection->query($sql);
		
					if(!$result){
						die(mysqli_error($connection));	
					}	

					return true;
				}
				else{ // if not
					return false;
				}
			}

			public function updateCollegeEmail($ID,$email) : bool{
				$this->ID = $ID;
				$this->email = $email;

				if($this->chkCollege($this->ID) == true){ // if the ID exists in the database
					include 'connection.php';

					$sql = "UPDATE college set Cemail = '$this->email' 
							where CID = '$this->ID' ";
					$result = $connection->query($sql);
		
					if(!$result){
						die(mysqli_error($connection));	
					}	
					return true;

				}
				else{ // if not
					return false;
				}
			}

			public function updateCollegeAdress($ID,$adress) : bool{
				$this->ID = $ID;
				$this->adress = $adress;

				if($this->chkCollege($this->ID) == true){ // if the ID exists in the database
					include 'connection.php';

					$sql = "UPDATE college set address = '$this->adress' 
							where CID = '$this->ID' ";
					$result = $connection->query($sql);
		
					if(!$result){
						die(mysqli_error($connection));	
					}

					return true;
				}
				else{ // if not
					return false;
				}
			}

			public function deleteCollege($ID) : bool{
				$this->ID = $ID;
				
				if($this->chkCollege($this->ID) == true){  // if the ID exits in the database
					
					$this->deleteCutOffs($ID);  // to delete the cutoffs from the database

					include 'connection.php';

					$sql = "DELETE from college where CID = '$this->ID' ";
					$result = $connection->query($sql);
		
					if(!$result){
						die(mysqli_error($connection));	
					}	

					return true;
				}
				else{ // if not
					return false;
				}
			}

			public function deleteCutOffs($ID){

				include 'connection.php';

				$sql = "DELETE from cutoff where C_ID = '$this->ID' ";
				$result = $connection->query($sql);
		
				if(!$result){
					die(mysqli_error($connection));	
				}	
			}







		}






			





 ?>