<?php
	echo !defined("BRUNO") ? die("404 Forbidden") : null;

    function pages(){

		$do = $_GET['do'];

		switch($do){

            case "admin":
				require_once THEME . "/admin.php";
			break;

            case "etkinlik":
				require_once THEME . "/etkinlikler.php";
            break;

            case "menu":
				require_once THEME . "/menu.php";
			break;

			default:
				require_once THEME . "/default.php";
			break;
		}
	}

?>