<?php

require_once("Template.php");

$page = new Template("Week 5 Post Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

if(isset($_POST['username']) && !empty($_POST['username']))
{
	print "Form submitted successfully";
}

else
{
	print "Invalid form submission";
}

print $page->getBottomSection();

