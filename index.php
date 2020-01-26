<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));
require_once(ROOT.DS.'core'.DS.'bootstrap.php');
session_start();
var_dump($_SERVER['PATH_INFO']);
$url=isset($_SERVER['PATH_INFO'])?explode('/',ltrim($_SERVER['PATH_INFO'],'/')):[];
if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME))
{
Users::loginUserFromCookie();
}
var_dump($url);
Router::route($url);