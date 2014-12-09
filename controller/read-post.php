<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here

	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

	if($result){
		while($row = mysqli_fetch_array($result)){
			echo "<p>Posted on: </p>" . $date->format("m/d/y") . " at " . $time->format("g:i"); // lets you know that it succesfully created the date	
			echo "<div class='post'>";	//echos the post to the screen
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br/>";
			echo "</div";
		}
	}