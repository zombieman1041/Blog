<?php
	require_once(__DIR__ . "/../model/config.php"); // brings info from config.php to this file and concatentates the directory from here
	require_once(__DIR__ . "/../model/date.php"); // brings info from date.php to this file and concatentates the directory from here
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters the input of the title and sanitizes from title
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	////filters the input of the post and sanitizes from post

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'"); //creates a table by query with a title using the var title and a post with a var post
	if ($query) {	// checks to see if this statement exists
		# code...
		echo "<p>Successfully inserted post: $title</p>"; // lets you know that it succesfully created your post
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //lets you know that table:posts already exists
	}