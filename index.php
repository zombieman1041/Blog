<?php 
	require_once(__DIR__ . "/controller/login-verify.php");//executes file from here and concatentates the directory from here
	require_once(__DIR__ . "/view/header.php");
	if (authenticateUser()) {
		# code...
		require_once(__DIR__ . "/view/navigation.php");
	}	
	require_once(__DIR__ . "/view/body.php");
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/controller/read-post.php");
	require_once(__DIR__ . "/view/footer.php");
?>
