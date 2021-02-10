<?php 

	class DataBaseOperation
	{
		public $serverName = 'localhost';
		public $userName = 'root';
		public $password = '';
		public $databaseName = 'cybercom';
		public $con = '';
		public function __construct() {
			global $con;
			$con = new mysqli($this->serverName,$this->userName,$this->password,$this->databaseName);
			if($con->connect_error) {
				echo 'Error : '.$con->connect_error;
			}
		} 
		public function selectData($sql) {
			global $con;
			$result = $con->query($sql);
			return $result;
		}
		public function insertData($sql) {
			global $con;
			if($con->query($sql) === true ) {
				$last_id = $con->insert_id;
				return $last_id;
			} else {
				echo 'Error : '.$con->error;
			}
		}
		public function deleteData($sql) {
			global $con;
			if($con->query($sql) === true) {
				echo 'Data deleted successfully';
			} else {
				echo 'Error : '.$con->error;
			}
		}
		public function updateData($sql) {
			global $con;
			if($con->query($sql) === true) {
				echo 'Data Updated successfully..';
			} else {
				echo 'Error : '.$con->error;
			}
		}
	}

?>