<?php

$sql = "SELECT * FROM admin ";
$result = $connection->query($sql);

if(!$result){
		die(mysqli_error($connection));
	}


	if (mysqli_num_rows($result) > 0) {
  //output data of each row
 while($row = mysqli_fetch_assoc($result)) {
    echo "pass: " . $row["adm_pass"]. " - Name: " . $row["adm_name"]. "<br>";
  }
} else {
  echo "0 results";
}