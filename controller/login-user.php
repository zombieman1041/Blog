<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); //filters the input of the username and sanitizes from username
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); //filters the input of the password and sanitizes from password

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username='$username'");//creates a table by query that sets email username password(as a hashed password) and salt

	if ($query->num_rows == 1) {
		# code...
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])) {
			$_SESSION["authenticated"] = true;
			echo "<p>Login Successful!</p>";
		}
		else {
			# code...
			echo "<p>Invalid username and password</p>";
		}
	}
	else{
		echo "<p>Invalid username and password</p>";
	}
?>
