<?php
define('DEBUG',true);
define('DEFAULT_CONTROLLER','Home');
define('DEFAULT_LAYOUT','defaultLayout');
define('PROOT','/EmailCampaign/'); //Later we will set this to '/' when working for live server
define('SITE_TITLE','Email Campaign');

//Databases
define('DB_NAME','EmailCampaign');
define('DB_USER','manish');
define('DB_PASSWORD','M@ths7575');
define('DB_HOST','127.0.0.1');

//session and cookie
define('CURRENT_USER_SESSION_NAME','lkhdndjdeoeookddjj');
define('REMEMBER_ME_COOKIE_NAME','HJJDHDOIWOEIPWEOioei');
define('REMEMBER_ME_COOKIE_EXPIRY',304800);

// Google API configuration
define('GOOGLE_CLIENT_ID', '1090694937783-84ii1kiifhapjrfn4ski3s6q4dn97ds3.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '-HXWJ0aS0q-CDRD88_08hnjI');
define('GOOGLE_REDIRECT_URL', 'http://localhost/EmailCampaign/user/login');