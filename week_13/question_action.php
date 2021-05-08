<?php

require_once("includes.php");
require_once("WebServiceClient.php");

$client = new WebServiceClient("https://cnmt310.braingia.org/qws/q.php");
$data = array("apikey" => APIKEY,
			  "apiuser" => APIUSER
			 );
$client->setPostFields($data);
$QuestionRequest = $client->send();
$authObject = json_decode($QuestionRequest);

if($authObject->result == "Success")
{
	$_SESSION['question'] = $authObject->question;
	$_SESSION['answer'] = $authObject->answer;
	die(header("Location: " . QUESTION_PAGE));
}
else
{
	$_SESSION['errors'][] = $authObject->message;
}

die(header("Location: " . LOGIN_PAGE));