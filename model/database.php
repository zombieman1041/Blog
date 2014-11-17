<?php
class Database { //class Database is more efficient because instead of using different functions we can just use class database so all the functions we've been using are all in one class. This is an instance of a new object
	private $connection; //following variables are set to private so they wont be modified by other files
	private $host;
	private $username;
	private $password;
	private $database;

	public function __construct($host, $username, $password, $database) {		// The construct function is used so that whatever is in this function it will create an object for each variable
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	// These functions within our class are used to open connections
	public function openConnection(){

	}//These functions are used to close connections 
	public function closeConnection(){

	} //these functions are used to request
	public function query($string){	

	}
}

