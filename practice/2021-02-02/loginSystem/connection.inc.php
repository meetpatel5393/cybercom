<?php  
	error_reporting(0);
	
	$server_name = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'cybercom';

	$con = new mysqli($server_name,$username,$password,$database_name);
	if($con->connect_error) {
		echo 'Error : '.$con->connect_error;
	}

?>