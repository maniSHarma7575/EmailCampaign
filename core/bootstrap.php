<?php
//load configuration and helpers function
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'Library'.DS.'Helpers'.DS.'functions.php');

//Autoload Classes
require(ROOT.DS.'core'.DS.'autoload.php');

//Route the request with url
$db=Database::getInstance();
Router::route($url);