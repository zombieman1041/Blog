<?php
	require_once(__DIR__ . "/../model/database.php"); // brings info from database.php to this file and concatentates the directory from here
	
	$connection = new mysqli($host, $username, $password, $database); //used to access the database on the sqli server
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters the input of the title and sanitizes from title
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	////filters the input of the post and sanitizes from post

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'")
	if ($query) {
		# code...
		echo "<p>Successfully inserted post: $title</p>";
	}
	else{
		echo "<p>$connection->error</p>";
	}
	
	$connection->close();