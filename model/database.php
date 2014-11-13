<?php
class Database {
	private $connection; //following variables are set to private so they wont be modified by other files
	private $host;
	private $username;
	private $password;
	private $database;

	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function openConnection(){

	}
	public function closeConnection(){

	}
	public function query($string){	

	}
}

