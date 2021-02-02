<?php 

	require 'connection.inc.php';
	require 'core.inc.php';

	if(loggedIn()) {
		echo "You are successfully loggedIn <a href='logout.php'>Logout</a>";
	} else {
		include 'login.inc.php';
	}

?>