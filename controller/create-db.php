<?php
	require_once(__DIR__ . "/../model/config.php"); // brings info from config.php to this file and concatentates the directory from here

	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("  //creates a table by query

	. "id int(11) NOT NULL AUTO_INCREMENT,"				// creates unique ids for the server and cannot be empty and handles the ids for us 
	. "title varchar(255) NOT NULL,"					// creates a collumn for a title with a max length of 255 characters and it cant be empty
	. "post text NOT NULL,"								//creates a collumn for text that cannot be empty
	. "DateTime datetime NOT NULL ,"				//creates a collumn for the datetime that cant be empty(var)
	. "PRIMARY KEY(id))");							// allows the tables to be connected and is shown that it is connected by an id
	
	if ($query) {									// checks to see if this statement exists
		# code...
		echo "<p>Successfully created table: posts</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		// echo "<p>" . $_SESSION["connection"]->error . "</p>";			//lets you know that table:posts already exists
	}

	$query = $_SESSION["connection"]->query("CREATE TABLE users ("  //creates a table by query

	. "id int(11) NOT NULL AUTO_INCREMENT,"				// creates unique ids for the server and cannot be empty and handles the ids for us 
	. "username varchar(30) NOT NULL,"					// creates a collumn for a username with a max length of 30 characters and it cant be empty
	. "email varchar(50) NOT NULL,"						// creates a collumn for a email with a max length of 50 characters and it cant be empty
	. "password char(128) NOT NULL,"					// creates a collumn for a password with a max length of 128 characters and it cant be empty
	. "salt char(128) NOT NULL,"						//creates a security against hackers that cant be empty
	. "PRIMARY KEY(id))");								// allows the tables to be connected and is shown that it is connected by an id
	if ($query) {									// checks to see if this statement exists
	# code...
		echo "<p>Successfully created table: users</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		// echo "<p>" . $_SESSION["connection"]->error . "</p>";			//lets you know that table:posts already exists
	}	
?>
