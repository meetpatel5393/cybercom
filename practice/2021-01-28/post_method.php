<!DOCTYPE html>
<html>
<head>
	<title>post method</title>
</head>
<?php 

	if(isset($_POST['submit'])) {
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (
			!empty($username)
			&& !empty($email)
			&& !empty($password)
		) {
			if($password == 'meetpatel') {
				echo 'password match '.$username;
			} else {
				echo 'password not matched '.$username;
			}
		} else {
			echo 'please enter value first..';
		}
		
	}

?>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<label>Username</label>
		<input type="text" name="name"><br><br>
		<label>Email</label>
		<input type="email" name="email"><br><br>
		<label>Password</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>