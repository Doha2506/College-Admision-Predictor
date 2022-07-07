<?php 
	include 'stdClass.php';

	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST' ){
		new student($_POST['name'],$_POST['ID'],$_POST['email'],$_POST['mark']);
	}