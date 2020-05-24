<?php
	echo !defined("BRUNO") ? die("404 Forbidden") : null;

    function pages(){

		$do = $_GET['do'];

		switch($do){

			default:

				require_once THEME . "/default.php";

			break;
		}
	}

?>