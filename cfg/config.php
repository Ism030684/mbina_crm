<?php
/*
| -------------------------------------------------------------------
| MASTER CONFIGURATION
| -------------------------------------------------------------------
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

// -- App Info
define('APP_TITLE'  , 'CRM-Customer Relationship Management ');
define('APP_FOOTER'   , '2016 Mercedes Benz Indonesia'); //no space please
define('APP_VERSION', '0.1');
define('DESCRIPTION', 'CRM');
define('AUTHOR', 'ismail.proyek@gmail.com');
define('APP_YEAR'   , '2015');


// -- Module


// -- Url
$PROTOCOL = "http" . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
$SERVER   = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
$SERVER   = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $SERVER;
$BASE_URL = $PROTOCOL . $SERVER . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
define('MY_BASE_URL', $BASE_URL);
define('MY_INDEX_PAGE', '');





?>
