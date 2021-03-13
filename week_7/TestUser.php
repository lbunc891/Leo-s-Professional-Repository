<?php

require_once("User.php");

$user = new User();
	
var_dump($user->getLoginStatus());