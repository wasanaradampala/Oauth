<?php

require_once "config.php";


    //if there is session allready use it
	if (isset($_SESSION['access_token']))
		$googleClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
        //creating a new token with code in url
		$codetoken = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $codetoken;
	} else {
		header('Location: login.php'); //if no session token and no get code
		exit();
	}

	$Oauth = new Google_Service_Oauth2($googleClient);
	$userData = $Oauth->userinfo_v2_me->get();

    //get the data
    $_SESSION['firstName'] = $userData['familyName'];
	$_SESSION['LastName'] = $userData['givenName'];
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['photo'] = $userData['picture'];

	header('Location: login.php'); 
	exit();
	
?>