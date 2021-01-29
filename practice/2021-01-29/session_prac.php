<h2>Session Practice</h2>
<a href="show_session_value.php">Show Output</a>
<a href="unset_session.php">Unset Session</a>
<?php

	//session
	session_start();
	$_SESSION['username'] = 'meet'; //set s session
	//$_SESSION['USERNAME'] = 'MEET';
	$_SESSION['email'] = 'meetpatel5393@gmail.com';

?>