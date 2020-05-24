<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

    session_start();
	ob_start();
	## Hatalar ##
	error_reporting(0);
	## Bağlantı Değişkenleri ##
	echo !defined("BRUNO") ? die("404 Forbidden") : null;

	date_default_timezone_set('Europe/Istanbul');

	define("TITLE", "");
	define("DESC", "");
	define("PATH", realpath("."));
    define("URL", "https://backoffice.replybutton.com");
    define("THEME_URL", URL . "/public");
    define("THEME", PATH . "/public");
    define("STATUS", 1);

?>