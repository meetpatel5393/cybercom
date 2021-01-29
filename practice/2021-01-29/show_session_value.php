<?php

	session_start();

	//access session
	if (isset($_SESSION['username'])) {
		echo $_SESSION['username'].'<br>';	
	} else {
		echo 'Set session first<br>';
	}

	//session unset practice.
	session_unset();//is we unset the session so , it will destroy all variable and data of the current session but session is still exist's i mean session file still exists in server/localstorage.
	echo session_id().'<br>';
	echo session_save_path().'<br>';//give path where session file is store , eg.C:\xampp\tmp


	//session distroy practice.
	//session_destroy();//this function will delete data and session variable as well as delete session file.
	//echo session_id().'<br>';
	
?>