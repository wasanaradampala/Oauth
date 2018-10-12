<?php
	session_start();
	require_once "phpGoogleAPI/vendor/autoload.php";
	$googleClient = new Google_Client();
	$googleClient->setClientId("697555451380-8dkikslcoutjo9vcmv0mqu6dr6d1tmhb.apps.googleusercontent.com");
	$googleClient->setClientSecret("saTXAyKM-Z8rBAjwx2fD3Qdr");
	$googleClient->setApplicationName("Google Sign App");
	$googleClient->setRedirectUri("http://localhost/Oauth/callback.php");
	$googleClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>