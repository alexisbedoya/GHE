<?php

	session_start();
	require_once "vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("863903670779-73e431fagr7p89j75nifqn3lr1j4f2oj.apps.googleusercontent.com");
	$gClient->setClientSecret("LCcVjgO-e_JTnjXd-vupaZV9");
	$gClient->setApplicationName("login");
	$gClient->setRedirectUri("http://localhost/Proyecto/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'proyecto');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>