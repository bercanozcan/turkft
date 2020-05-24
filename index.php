<?php
    ob_start();

	define("BRUNO",true);

    require THEME."/index.php";

    ob_flush();

?>