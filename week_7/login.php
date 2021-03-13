<?php

require_once("Template.php");

$page = new Template("Login");
$page->addHeadElement('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">');
$page->addHeadElement('<script src="script.js"></script>');
$page->addHeadElement('<link href="style.css" rel="stylesheet" type="text/css">');
$page->addBottomElement('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

print '<form action="login_post_page.php" method="post" id="accountCreation">';
print '<div class="form-row">';
print '<div class="form-group mb-4 col-md-4 pt-5 mx-auto">';
print '<label for="Username">Username</label>';
print '<input type="text" class="form-control" id="Username" placeholder="Enter Username" name="Username">';
print '</div>';
print '</div>';
print '<div class="form-row">';
print '<div class="form-group mb-4 col-md-4 mx-auto">';
print '<label for="Password1">Password</label>';
print '<input type="password" class="form-control" id="Password" placeholder="Enter Password" name="Password">';
print '</div>';
print '</div>';
print '<div class="form-row">';
print '<div class="form-group mb-4 col-md-4 mx-auto">';
print '<button type="submit" class="btn btn-primary" id="submit">Submit</button>';
print '</div>';
print '</div>';
print '</form>';
print '<div id="errorDiv"></div>';

print $page->getBottomSection();

