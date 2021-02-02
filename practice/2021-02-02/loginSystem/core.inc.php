<?php

	session_start();
	$file_name = $_SERVER['SCRIPT_NAME'];

	function loggedIn(){
		if(isset($_SESSION['user_id'])) {
			return true;
		} else {
			return false;
		}
	}

?>