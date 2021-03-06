<?php

require_once("Template.php");

$page = new Template("Week 6 Post Page");
$page->addHeadElement('<link href="style.css" rel="stylesheet" type="text/css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

$validInput = true;

if(strlen($_POST['Username']) < 3)
{
	print '<div id="validationError">Username not 3 characters or more<br></div>';
	$validInput = false;
}

if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
{
	print '<div id="validationError">Email not valid<br></div>';
	$validInput = false;
}

if($_POST['Password1'] != $_POST['Password2'])
{
	print '<div id="validationError">Passwords do not match<br></div>';
	$validInput = false;
}

if(strlen($_POST['Password1']) < 10 || strlen($_POST['Password2']) < 10)
{
	print '<div id="validationError">Password is not long enough<br></div>';
	$validInput = false;
}

if($validInput)
{
	print '<div id="validInput">Valid Input</div>';
}

print $page->getBottomSection();

