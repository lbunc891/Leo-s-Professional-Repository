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

include('users.php');

if (array_key_exists($_POST['username'],$users)) {
  if (password_verify($_POST['password'],$users[$_POST['username']]) === true) {
    $_SESSION['username'] = strip_tags($_POST['username']);

    $_SESSION['isLoggedIn'] = true;
    die(header("Location: " . AUTHENTICATED_HOME)); 
  }
}

$_SESSION['errors'][] = "Invalid password or user not found";
die(header("Location: " . LOGIN_PAGE)); 

