<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 

	if(isset($_GET['submit'])) {
		$username = $_GET['name'];
		$email = $_GET['email'];
		if (
			!empty($username)
			&& !empty($email)
		) {
			echo $username.'<br>'.$email;	
		} else {
			echo 'please enter value first..';
		}
		
	}

?>
<body>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
		<label>Username</label>
		<input type="text" name="name"><br><br>
		<label>Email</label>
		<input type="email" name="email"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>