<h2>Select Database Practice</h2>
<?php 

	$server_name = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'cybercom';

	/*
	//1)select db with mysqli(object oriented)
	echo "select db with mysqli(object oriented)<br>";
	echo "------------------------------------------<br>";
	$con = new mysqli($server_name,$username,$password,$database_name); //return object.
	if($con->connect_error) {
		echo 'Could not connect with database<br>';
	} else {
		echo 'Connected successfully<br>';
		$sql = 'select * from user';
		$result = $con -> query($sql); //return object.
		if($result) {
			if($result->num_rows == 0) {
				echo 'No data found<br>';
			} else {
				//$result -> free_result(); this will free all data fetch in $result.
				foreach ($result as $data) {
					echo $data['id'].' '.$data['name'].' '.$data['city'].' '.$data['collage'].' '.'<br>';
				}
				/*
				//fetch data row wise.
				while ($row = $result -> fetch_row()) {
					echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].' '.'<br>';
				}
				//fetch row : $row = $result -> fetch_row(); Eg. Array ( [0] => 0 ).
				//fetch associative array : $row = $result -> fetch_assoc(); Eg. Array ( [count] => 0 ).
				*
			}
		} else {
			echo 'Error in data fetching<br>';
		}
	}
	$con->close();
	*/

	
	/*
	//2)select db with mysqli(procedural)
	echo "<br>select db with mysqli(procedural)<br>";
	echo "------------------------------------------<br>";
	$con = mysqli_connect($server_name,$username,$password,$database_name); //return object.
	//var_dump($con); //if there is an error in connection so this will return false otherwise it will return object which contain info. like host_info , server_info , client_info , server_version.
	//echo $con->server_info;
	if(!$con) {
		echo 'Could not connect with database<br>';
	} else {
		echo 'Connected successfully<br>';
		$sql = 'select * from user where city="rajkot"';
		$result = mysqli_query($con , $sql); //return object.
		if(!$result) {
			echo 'Error in data fetching<br>';
		} else {
			if($result->num_rows == 0) {
				echo 'No data fonud';
			} else {
				//mysqli_free_result($result); // Free result set
				foreach ($result as $data) {
					echo $data['id'].' '.$data['name'].' '.$data['city'].' '.$data['collage'].' '.'<br>';
				}
				/*
					$row = mysqli_fetch_row($result); // // Fetch one and one row
					$row = mysqli_fetch_array($result, MYSQLI_NUM); // Numeric array
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // Associative array
				*
			}
		}
	}
	mysqli_close($con);
	*/
	

	/*
	//3)select db with PDO
	echo "<br>select db with PDO<br>";
	echo "------------------------------------------<br>";
	try {
		$con = new PDO("mysql:host=$server_name;dbname=$database_name",$username,$password); //return object
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //return boolean value.
		$sql = $con -> prepare('select * from user');//return object
		$sql->execute();//return true if successfully execute else give exception.
		$result = $sql->fetchAll(); //return array.
		foreach($result as $data) {
			echo $data['id'].' '.$data['name'].' '.$data['city'].' '.$data['collage'].' '.'<br>';	
		}
	} catch(PDOException $e) {
		echo "Error :<br>".$e->getMessage().'<br>';
		//var_dump($e); //$e is an object.
	}
	*/

?>