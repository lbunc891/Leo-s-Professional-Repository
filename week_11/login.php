<?php

require_once("SiteTemplate.php");

$page = new SiteTemplate("LoginPage");
$page->addHeadElement('<link href="login_sytle.css" rel="stylesheet" type="text/css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

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

