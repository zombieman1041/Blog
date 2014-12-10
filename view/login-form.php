<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here to access the path file
?>

<h1>Login!</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>"><!-- sends the data to the database and links the file to create-user.php -->
	<div align="center">
		<label for="username">Username: </label>
		<input type="text" name="username" />		
	</div>
	<div align="center">
		<label for="password">Password: </label>
		<input type="password" name="password" />	<!-- type="password" hides the letters when typing your password	 -->
	</div>
	<div align="center">
		<button type="submit" class="btn btn-default">Submit</button> <!-- Button that sends data given on code above to a file -->
	</div>	
</form>	
</form>