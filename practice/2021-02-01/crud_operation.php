<?php
	require 'crud.inc.php';
	get_all_data();
	echo '<br>';
?>
<style type="text/css">
	td,tr {
		border:1px solid black;
		padding:8px;
	}
</style>
<body>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
		<label>Select operation which you want to perform :</label><br>
		<select name="operation">
			<option selected="" disabled="">Select Operation</option>
			<option value="Insert" class="btn">Insert</option>
			<option value="Delete">Delete</option>
			<option value="Update">Update</option>
		</select>
		<button type="submit" name="submit">Perfrom Operation</button>
	</form>
</body>
<?php

	if(isset($_GET['submit'])) {
		if(isset($_GET['operation'])) {
			$operation = strtolower($_GET['operation']);
			switch ($operation) {
				case 'select':
					echo $operation;
					break;

				case 'insert':
					echo '
						<label>Insert Data</label><br>
						<form method="post" action="crud_operation.php">
							<label>Id</label>
							<input type="number" name="id" required="">
							<label>Name</label>
							<input type="text" name="name" required="">
							<label>City</label>
							<input type="text" name="city" required="">
							<label>Collage</label>
							<input type="text" name="collage" required="">
							<button type="submit" name="insert_data_btn">Insert Data</button>
						</form>
					';
					break;

				case 'delete':
					echo '
						<form method="post" action="crud_operation.php" >
							<label>Delete Data Where....</label><br>
							<select name="column_name" required="">
								<option value="" disabled selected>select</option>
								<option value="id">Id</option>
								<option value="name">Name</option>
								<option value="city">City</option>
								<option value="collage">Collage</option>
							</select>
							<label>Value</label>
							<input type="text" name="dlt_val" required>
							<button type="submit" name="delete_data_btn">Delete Data</button>
						</form>
					';
					break;

				case 'update':
					echo '
						<label>Enter Querie For Update Data</label><br>
						<form method="post" action="crud_operation.php" >
							<input type="text" name="update_query" required>
							<button type="submit" name="update_data_btn">Update Data</button>
						</form>
						<p>Eg. update table_name set col_name="new_val" where col_name="old_val"</p>
					';
					break;
			}
		} else {
			echo 'Please select operation type';
		}
	}

	//insert data
	if(isset($_POST['insert_data_btn'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$city = $_POST['city'];
		$collage = $_POST['collage'];

		insert_data($id,$name,$city,$collage);
	}

	//delete data
	if(isset($_POST['delete_data_btn'])){
		$val = $_POST['dlt_val'];
		$column_name = $_POST['column_name'];

		delete_data($val,$column_name);
	}

	//update data
	if(isset($_POST['update_data_btn'])){
		$update_query = $_POST['update_query'];

		update_data($update_query);
	}	

?>