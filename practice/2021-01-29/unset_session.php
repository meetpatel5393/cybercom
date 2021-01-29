<?php

	session_start();

	//unset session
	if (isset($_SESSION['username'])) {
		echo $_SESSION['username'].'<br>'.$_SESSION['email'].'<br>';
		//session_unset();//this method will unset all the available session.
		//unset($_SESSION['username']);//to unset only specified session. eg.username
		//session_destroy();
	} else {
		echo 'session already unset<br>'.$_SESSION['email'];
	}

?>