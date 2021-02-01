<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
	<label>Select student by city :</label>
	<select name="city">
		<option selected="" disabled="">Select City</option>
		<option value="Rajkot">Rajkot</option>
		<option value="Ahemdabad">Ahemdabad</option>
		<option value="Gondal">Gondal</option>
		<option value="Amreli">Amreli</option>
	</select>
	<button type="submit" name="submit">Show student list</button>
</form>

<?php

	if(isset($_GET['submit'])) {
		if(isset($_GET['city'])) {
			$city_name = $_GET['city'];
			$server_name = 'localhost';
			$username = 'root';
			$password = '';
			$database_name = 'cybercom';

			$con = new mysqli($server_name,$username,$password,$database_name);
			if($con->connect_error) {
				echo 'Could not connect with database<br>';
			} else {
				$sql = "select * from user where city='$city_name'";
				$result = $con -> query($sql);
				if($result) {
					if($result->num_rows == 0) {
						echo 'No data found<br>';
					} else {
						foreach ($result as $data) {
							echo $data['id'].' '.$data['name'].' '.$data['city'].' '.$data['collage'].' '.'<br>';
						}
					}
				} else {
					echo 'Error in data fetching<br>';
				}
			}
		} else {
			echo 'Please select city';
		}
	}

?>