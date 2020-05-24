<?php
	echo !defined("BRUNO") ? die("404 Forbidden") : null;

    function pages(){

		$do = $_GET['do'];

		switch($do){

			default:

				$title = "";
				$desc = "";
				$image = "";
				$url = URL;
				$menu = "home";

				require_once THEME . "/header.php";
				require_once THEME . "/default.php";
				require_once THEME . "/footer.php";

			break;
		}
	}

?>