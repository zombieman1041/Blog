<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //filters the input of the email and sanitizes from email
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); //filters the input of the username and sanitizes from username
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); //filters the input of the password and sanitizes from password

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";		//

	$hashedPassword = crypt($password, $salt); //runs the crypt function which will pass in the password variable and to use the salt for a encrypted password

	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
	. "email = '$email',"
	. "username = '$username',"
	. "password = '$hashedPassword',"
	. "salt = '$salt'"); //creates a table by query that sets email username password(as a hashed password) and salt

	if ($query) {
		# code...
		echo "successfully created user: $username";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>