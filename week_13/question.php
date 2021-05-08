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
print'<form action="answer.php" method="POST">';
print'<h3>' . $_SESSION['question'] . '</h3>';
print'<input type="text" name="answer">';
print'<br>';
print'<br>';
print'<button class="w-100 btn btn-lg btn-primary" type="submit">Submit Answer</button>';
print'</form>';
print'</main>';
print'</body>';