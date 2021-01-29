<h2>Cookie practice</h2>
<?php 

	//The main difference between a session and a cookie is that session data is stored on the server, whereas cookies store data in the visitor's browser.
	setcookie('name','meet kapadiya' ,time()+10);
	$email = 'meetpatel5393@gmail.com';
	setcookie('email',$email);

?>