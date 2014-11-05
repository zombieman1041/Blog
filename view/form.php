<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here
?>
	<h1>Create Blog Post</h1>

	<form method="post" action="<?php echo $path . "controller/create-post.php"?>">
		<div> <!-- title -->
			<label for="title">Title: </label>
			<input type="text" name="title" />
		</div>
		<div><!-- write text here! -->
			<label for="post">Post: </label>
			<textarea name="post"></textarea>
		</div>
		<div>
			<button type="submit">Submit</button> <!-- Button that sends data given on code above to a file -->
		</div>
	</form>