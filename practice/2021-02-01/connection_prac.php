<h2>Connection with Database Practice</h2>
<?php 

	/*
		three method to connect with database.
		1) MySQLi (object-oriented)
		2) MySQLi (procedural)
		3) PDO : PDO will work on 12 different database systems , MySQLi will only work with MySQL databases.
	*/
	$server_name = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'cybercom';

	//1) MySQLi (object-oriented)
	$con = new mysqli($server_name,$username,$password,$database_name);
	if($con->connect_error){
		echo 'Connection error : MySQLi (object-oriented)<br>';
	} else {
		echo 'Successfully connected : MySQLi (object-oriented)<br>';
	}
	$con -> close(); //close the connection
	
	//2) MySQLi (procedural)
	$con = mysqli_connect($server_name,$username,$password,$database_name);
	if(!$con) {
		echo 'Connection error : MySQLi (procedural)<br>';
	} else {
		echo 'Successfully connected : MySQLi (procedural)<br>';
	}
	mysqli_close($con); //close the connection

	//3) PDO
	try {
		$con = new PDO("mysql:host=$server_name;dbname=$database_name",$username,$password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'Successfully connected : PDO<br>';
	} catch(PDOException $e) {
		echo "Connection failed :PDO : ".$e->getMessage();
	}
	$con = null; //close the connection

?>