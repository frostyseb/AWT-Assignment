<?php

session_start();
require_once "API\GoogleAPI\vendor\autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("");
$gClient->setClientSecret("");