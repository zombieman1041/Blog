<?php
	require_once(__DIR__ . "/../model/config.php"); // brings info from config.php to this file and concatentates the directory from here
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters the input of the title and sanitizes from title
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	//filters the input of the post and sanitizes from post
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'"); //creates a table by query with a title using the var title and a post with a var post
	if ($query) {	// checks to see if this statement exists
		# code...
		echo "<p>Successfully inserted post: $title</p>"; // lets you know that it succesfully created your post
		echo "<p>Posted on: </p>" . $date->format("m/d/y") . " at " . $time->format("g:i"); // lets you know that it succesfully created the date	
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //lets you know that table:posts already exists
	}