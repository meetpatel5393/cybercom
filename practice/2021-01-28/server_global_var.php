<?php

	include 'header.inc.php';
	if(isset($_POST['submit'])) {
		echo 'page1';
	}

	//print_r($_SERVER); // this will print all available environment variable.
	//echo '<br>'.$_SERVER['SCRIPT_NAME'];//return path to the current page.
	echo '<br>'.$_SERVER['HTTP_HOST'];//return hostname.

?>