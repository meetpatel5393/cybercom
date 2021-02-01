<?php
	
	$server_name = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'cybercom';
	$con = new mysqli($server_name,$username,$password,$database_name);
	$user_ip = gethostbyname('localhost');
	
	function check_ip_in_db($ip) {
		global $con;
		if(!$con->connect_error) {
			$sql = "select * from ip where ip='$ip'";
			$result = $con -> query($sql);
			if($result) {
				if($result->num_rows == 0) {
					add_ip($ip);//add ip into data base
					increment_count();//increment count into data base
				}
			}
		}
	}
	function add_ip($ip){
		global $con;
		if(!$con->connect_error) {
			$sql = "INSERT INTO ip VALUES('$ip')";
			$con -> query($sql);
		}
	}
	function increment_count() {
		global $con;
		if(!$con->connect_error) {
			$sql = "select count from counter";
			$result = $con -> query($sql);
			if($result) {
				$count = $result -> fetch_assoc();
				$old_count = $count['count'];
				$new_count = $old_count + 1;
				$sql = "UPDATE counter SET count='$new_count' WHERE count='$old_count'";
				$con -> query($sql);
			}
		}
	}
	check_ip_in_db($user_ip);
?>