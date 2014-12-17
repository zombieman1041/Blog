<?php
	require_once(__DIR__ . "/../model/config.php");//executes file from here and concatentates the directory from here
	if (!authenticateUser()) {
		# code...
		header("Location: " . $path . "index.php");
		die();
	}
?>
<nav align="center">
	<li class="form"><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li><!-- looks at the web server root which is localhost -->
</nav>

