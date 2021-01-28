<h1>This is practice of header file</h1>
<?php

	//header("HTTP/1.0 404 Not Found"); //The first header starts with string “HTTP/”, which is used to figure out the HTTP status code to send. 

	header("Location:http://google.com");//The second case of header is the “Location:”
	
	//to automatically redirect after specific time.
	//header( "refresh:5;url=header.inc.php" );
  	//echo 'You\'ll be redirected in about 5 secs. If not, click <a href="header.inc.php">here</a>.';
?>