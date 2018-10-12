<?php
	require_once "config.php";
	unset($_SESSION['access_token']); //unset the token
	$googleClient->revokeToken(); //revoke the token
	session_destroy(); //destroy all other
	header('Location: login.php'); //then redirect to login
	exit();
?>