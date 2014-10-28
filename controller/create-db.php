<?php
	require_once(__DIR__ . "/../model/database.php"); // brings info from database.php to this file and concatentates the directory from here
	$connection = new mysqli($host, $username, $password); //used to access the database on the sqli server
	if($connection->connect_error){						// checks to see if the connection has an error
		die("Error: " . $connection->connect_error);	// if there is an error the program will die
	}
	$exists = $connection->select_db($database); 		//selects the database and checks if it exists
	if (!$exists) {										
		$query = $connection->query("CREATE DATABASE $database"); //creates a database by query called blog_db NOTE: action words are in uppercase
		if ($query) {											//outputs a statement that the query was true
			echo "Successfully created database: " . $database;
		}
	}
	else {												// Outputs that the database already exists
		echo "database already exists.";
	}

	$query = $connection->query("CREATE TABLE posts ("  //creates a table by query

	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY(id))");	
	$connection->close();							//closes connection 
?>
