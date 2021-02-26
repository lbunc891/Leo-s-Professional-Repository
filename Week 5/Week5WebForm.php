<?php

require_once("Template.php");

$page = new Template("Week 5 Web Form");
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

print '<form action="PostPage.php" method="post"> <br> ';
print 'Username: <input type ="text" name="username"> <br>';
print 'Password: <input type="text" name="password1"> <br>';
print 'Confirm Password: <input type="text" name="password2"> <br>';
print 'Email: <input type="text" name="email"> <br> <br>';
print '<input type="submit" name="submit"> </form>';

print $page->getBottomSection();

