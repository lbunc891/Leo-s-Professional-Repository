<?php

require_once("Template.php");

$page = new Template("Post Page");
$page->addHeadElement('<link href="style.css" rel="stylesheet" type="text/css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

$validInput = true;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') 
{  
	print "Please log in \n";
	print $page->getBottomSection();    
	exit; 
} 

$expectedFields = array("Username", "Password");

foreach ($expectedFields as $field) 
{
	if (!isset($_POST[$field]) || empty($_POST[$field])) 
	{    
		print "Please fill the form in.\n";    
		print $page->getBottomSection();    
		exit;  
	}
}

print "Thank you for logging in!";

print $page->getBottomSection();

