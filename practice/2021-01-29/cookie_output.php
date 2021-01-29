<?php

	//cookie output.
	if(count($_COOKIE) > 0) {
		if(
			isset($_COOKIE['name'])
			&& isset($_COOKIE['email'])
		) {
			echo "Cookies are enabled and your cookie value is <br>name => ".$_COOKIE['name'].'<br> email => '.$_COOKIE['email'].'<br>';
		} else {
			echo 'Cookie not available';
		}
	} else {
	 	echo "Cookies are disabled.";
	}
	//print_r($_COOKIE);
	
?>