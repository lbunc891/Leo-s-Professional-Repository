<?php

class User
{
	private $username;
	private $password;
	private $emailAddress;
	private $isLoggedIn = false;
	
	function login($username, $password)
	{
		
	}
	
	function logout()
	{
		
	}
	
	function getEmailAddress()
	{
		return $this->emailAddress;
	}
	
	function getLoginStatus()
	{
		return $this->isLoggedIn;
	}
}