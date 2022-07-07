<?php

abstract class log{
	public $email;
	public $password;

	public function __construct($email,$password){  // contructor
		$this->email = $email;
		$this->password = $password;
	}

	abstract public function login($email,$password) : bool;
	abstract public function logout() : void;

}