<?php

require_once("includes.php");
if (isset($_SESSION['isLoggedIn'])) {
  $_SESSION['isLoggedIn'] = false;
}

$required = array("username","password");
$_SESSION['errors'] = array();
foreach ($required as $index => $value) {
  if (!isset($_POST[$value]) || empty($_POST[$value])) {
    $_SESSION['errors'][] = "Username and password are required";
    die(header("Location: " . LOGIN_PAGE));
  }
}

require_once("WebServiceClient.php");

$client = new WebServiceClient("http://cnmt310.braingia.org/authws/auth.php");
$data = array("apikey" => APIKEY,
			  "apiuser" => APIUSER,
			  "password" => $_POST['password'],
			  "username" => $_POST['username']
			 );
$client->setPostFields($data);
$authenticationRequest = $client->send();
$authObject = json_decode($authenticationRequest);

if(!is_object($authObject))
{
	$_SESSION['errors'][] = "Error: Authentication Issues";
	die(header("Location: " . LOGIN_PAGE));
}

if($authObject->result == "Success")
{
	$_SESSION['isLoggedIn'] = true;
	$_SESSION['name'] = $authObject->name;
	$_SESSION['user_role'] = $authObject->user_role;
	$_SESSION['email'] = $authObject->email;
	$_SESSION['correct_total'] = 0;
	die(header("Location: " . AUTHENTICATED_HOME));
}
else
{
	$_SESSION['errors'][] = $authObject->message;
}

die(header("Location: " . LOGIN_PAGE)); 

