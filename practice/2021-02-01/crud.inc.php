<?php 

	$server_name = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'cybercom';

	$con = new mysqli($server_name,$username,$password,$database_name);

	function get_all_data(){
		global $con;
		$sql = 'select * from user';
		$result = $con -> query($sql);
		if(!$result->num_rows == 0) {
			echo "<table>";
			foreach ($result as $data) {
				echo "
					<tr>
						<td>$data[id]</td>
						<td>$data[name]</td>
						<td>$data[city]</td>
						<td>$data[collage]</td>
					</tr>
				";
			}
			echo "</table>";
		}
	}

	function insert_data($id,$name,$city,$collage){
		global $con;
		$sql = "INSERT INTO `user`(`id`, `name`, `city`, `collage`) VALUES ('$id','$name','$city','$collage')";
		$con -> query($sql);
		$success_message = 'inserted';
		header('Location:crud_operation.php');
	}

	function delete_data($val,$column_name){
		global $con;
		$sql = "SELECT * FROM `user` WHERE $column_name='$val'";
		$result = $con -> query($sql);
		if($result) {
			if($result->num_rows == 0) {
				echo 'No data found<br>';
			} else {
				$sql = "DELETE FROM `user` WHERE $column_name='$val'";
				$con -> query($sql);
				header('Location:crud_operation.php');
			}
		}
	}

	function update_data($update_query) {
		global $con;
		$sql = $update_query;
		if($con ->query($sql)) {
			echo 'successfully update data';
			header('Location:crud_operation.php');
		} else {
			echo 'error in query';
		}
	}

?>