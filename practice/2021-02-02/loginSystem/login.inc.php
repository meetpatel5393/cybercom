<?php
	
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$password = strtolower($_POST['password']);
		if(
			!empty($name)
			&& !empty($password)
		) {
			$hash_password = md5($password);
			$sql = "SELECT id FROM login_info WHERE username='$name' AND password='$hash_password'";
			$result = $con -> query($sql);
			if($result->num_rows == 0) {
				echo "Invalid Username and Password";
			} else {
				$op = $result->fetch_assoc();
				$id = $op['id'];
				$_SESSION['user_id'] = $id;
				header("Location:index.php");
			}

		} else {
			echo 'Please enter value first';
		}
	}

?>
<form method="post" action="<?php echo $file_name ?>">
	Username : <input type="text" name="name">
	Password : <input type="password" name="password">
	<button type="submit" name="submit">Log In</button>
</form>