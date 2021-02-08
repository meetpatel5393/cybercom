<?php 

	require 'connection.inc.php';
	$res = '';
	$obj = new DataBaseOperation();
	$query = 'SELECT * FROM contactdetail';
	$result = $obj->selectData($query);
	if($result->num_rows == 0) {
		$res = '<center>No Contact Added</center>';
	} else {
		foreach ($result as $value) {
			$res .= "
			<tr>
				<td>$value[id]</td>
				<td>$value[name]</td>
				<td>$value[email]</td>
				<td>$value[phoneNumber]</td>
				<td>$value[title]</td>
				<td class='text-left'>
					$value[created] <br>
					<a class='btn bg-danger text-white float-right' 
					id='$value[id]' onclick='deleteContact(this.id)'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
					<form method='GET' class='p-0 m-0' action='update.php'>
						<input type='text' name='id' value='$value[id]' hidden>
						<button type='submit' class='btn bg-primary text-white float-right mr-2'><i class='fa fa-pencil' aria-hidden='true'></i></button>
					</form>
				</td>
			</tr> ";
		}
		return $res;
	}

?>