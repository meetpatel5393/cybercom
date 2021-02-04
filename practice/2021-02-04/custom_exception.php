<?php 

	error_reporting(0);
	$server_name = 'loclhost';
	$user_name = 'root';
	$password = '';
	$database_name = 'cybercom';

	class mysqlException extends Exception {
		public function customExceptionMessage() {
			//custom error message
			echo '(mysqlException) Mysql Exception in line '.$this->getLine().' in '.$this->getFile();
		}
	}
	class mysqlException1 extends Exception {
		public function customExceptionMessage1() {
			echo '(mysqlException1) Mysql Exception in line '.$this->getLine().' in '.$this->getFile();
		}
	}

	try {	
		$con = mysqli_connect($server_name,$user_name,$password,$database_name);
		if(!$con) {
			throw new mysqlException();

			//throw new mysqlException1(); //this will meaning less , because whenever exception is occur then the rest of the code after thorw statement will be skiped and flow directly goes in catch block.
		}
	} catch (mysqlException $e) {
		echo $e->customExceptionMessage();
	} catch (mysqlException1 $e) {
		echo $e->customExceptionMessage1();
	} finally {
		echo '<br>This is finally block';
	}



	/*
		class mysqlException extends Exception {}
		try {	
			$con = mysqli_connect($server_name,$user_name,$password,$database_name);
			if(!$con) {
				throw new mysqlException('Mysql Exception');
			}
		} catch (mysqlException $e) {
			echo $e->getMessage;
		}
	*/

?>