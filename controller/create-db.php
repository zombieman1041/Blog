<?php
	require_once(__DIR__ . "/../model/database.php");
	$connection = new mysqli($host, $username, $password);
	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}

	$exists = $connection->select_db($database);
	if (!$exists) {
		# code...
		$query = $connection->query("CREATE DATABASE $database");

		if ($query) {
			# code...
			echo "Successfully created database: " . $database;
		}
	}
	else {
		# code...
		echo "database already exists.";
	}

	$connection->close();
?>