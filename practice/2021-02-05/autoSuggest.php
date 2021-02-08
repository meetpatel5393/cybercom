<?php 
	
	require 'connection.inc.php';
	$val = $_GET['val'];
	//$val = $_POST['text']; //if we use post method.
	if($val == '') {
		echo 'Please Enter Value First';
	} else {
		$sql = "SELECT * FROM customer WHERE customer_name LIKE '$val%'";
		$result = $con->query($sql);
		if($result->num_rows == 0) {
			echo 'No Value Found';
		} else {
			while($row = $result->fetch_assoc()) {
	    		echo "
	    			<tr>
	    				<td>$row[customer_id]</td>
	    				<td>$row[customer_name]</td>
	    				<td>$row[city]</td>
	    				<td>$row[country]</td>
	    			</tr>
	    		";
	  		}
		}
	}

?>