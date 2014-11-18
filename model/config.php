<?php
	require_once(__DIR__ . "/database.php"); // brings info from config.php to this file and concatentates the directory from here
 	//creates a path to /blog/
	$path = "/blog/";
	// variables below enables our database to connect to the server
	$host = "localhost";	
	$username = "root";
	$password = "root";
	$database = "blog_db";
	//creates a database object
	$connection = new Database($host, $username, $password, $database);

?>