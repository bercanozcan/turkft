<?php
    ob_start();
    define("BRUNO",true);

    require_once "app/app.php";
	require_once "app/system.php";

    require THEME."/index.php";

    ob_flush();

?>