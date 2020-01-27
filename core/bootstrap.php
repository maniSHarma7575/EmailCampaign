<?php
//load configuration and helpers function
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'Library'.DS.'Helpers'.DS.'functions.php');
require(ROOT.DS.'config'.DS.'googlelogin.php');

// Include Google API client library
require_once ROOT.DS.'api/google-api-php-client/Google_Client.php';
require_once ROOT.DS.'api/google-api-php-client/contrib/Google_Oauth2Service.php';
//Autoload Classes
require(ROOT.DS.'core'.DS.'autoload.php');

//Route the request with url
//$db=Database::getInstance();
