<?php
require_once("includes.php");

if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] === false)
{
	die(header("Location: " . LOGIN_PAGE));
}

require_once("SiteTemplate.php");

$page = new SiteTemplate("LoginPage");
$page->addHeadElement('<link href="home.css" rel="stylesheet" type="text/css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

print'<body class="d-flex h-100 text-center text-white bg-dark">';
print'<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">';
print'<header class="mb-auto">';
print'<div>';
print'<nav class="nav nav-masthead justify-content-center">';
print'<a class="nav-link active" aria-current="page" href="home.php">Home</a>';
print'<a class="nav-link active" aria-current="page" href="question_action.php">Questions</a>';
print'<a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>';
print'</nav>';
print'</div>';
print'</header>';
print'<br>';
print'<br>';
print'<main class="px-3">';
print'<h1>Welcome, ' . $_SESSION['name'] . '</h1>';
print'</main>';
print'</body>';