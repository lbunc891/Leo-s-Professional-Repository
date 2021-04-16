<?php

$users = array("Leo" => '$2y$10$tK9aRjCMv9EW58D56xgpoegO2MeeB/PYySWdjq/5USF.bManxatiy', 
			   "Bunczak" => '$2y$10$TokiNUSQ6eQTXgTUK4n14.bqql0YDIhq0Wuj/qy7W.h.X5AEMUajS');
$errors = array();
$isLoggedIn = false;
$required = array("username", "password");

foreach($required as $key => $value)
{
	if(!isset($_POST[$value]) || empty($_POST[$value]))
	{
		$errors[] = "Please fill out the form";
	}
}

if(array_key_exists($_POST['username'],$users))
{
	$userPassword = $_POST['password'];
	$dbPass = $users[$_POST['username']];
	
	if(password_verify($userPassword, $dbPass) === true)
	{
		$isLoggedIn = true;
	}
	else
	{
		$isLoggedIn = false;
		$errors[] = "Username not found or password incorrect";
	}
}

require_once("SiteTemplate.php");

$page = new SiteTemplate("LoginPage");
$page->addHeadElement('<link href="login_sytle.css" rel="stylesheet" type="text/css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

if(count($errors) > 0)
{
	foreach($errors as $error)
	{
		print "Error: " . $error . "<br/>";
	}
}
else if($isLoggedIn === true)
	{
		print "Hello, you are logged in";
	}

print '<form class="form-signin" action="login_action.php" method="POST">';
print '<h1 class="h3 mb-3 fw-normal">Please sign in</h1>';
print '<div class="form-floating">';
print '<input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username">';
print '<label for="floatingUsername">Username</label>';
print '</div>';
print '<div class="form-floating">';
print '<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">';
print '<label for="floatingPassword">Password</label>';
print '</div>';
print '<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>';
print '</form>';
print '<div id="errorDiv"></div>';

print $page->getBottomSection();

