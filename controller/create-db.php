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

	. "id int(11) NOT NULL AUTO_INCREMENT,"				// creates unique ids for the server and cannot be empty and handles the ids for us 
	. "title varchar(255) NOT NULL,"					// creates a collumn for a title with a max length of 255 characters and it cant be empty
	. "post text NOT NULL,"								//creates a collumn for text that cannot be empty
	. "PRIMARY KEY(id))");							// allows the tables to be connected and is shown that it is connected by an id
	
	if ($query) {
		# code...
		echo "Successfully created table: posts";
	}
	else{
		echo "<p>$connection->error</p>";
	}
	$connection->close();							//closes connection 
?>
