<?php
	require_once(__DIR__ . "/../model/database.php"); // brings info from database.php to this file and concatentates the directory from here
	$connection = new mysqli($host, $username, $password); //used to access the database on the sqli server
	if($connection->connect_error){						// checks to see if the connection has an error
		die("Error: " . $connection->connect_error);	// if there is an error the program will die
	}
	$exists = $connection->select_db($database); 		//selects the database and checks if it exists
	if (!$exists) {
		$query = $connection->query("CREATE DATABASE $database");

		if ($query) {
			echo "Successfully created database: " . $database;
		}
	}
	else {
		echo "database already exists.";
	}

	$connection->close();							//closes connection 
?>