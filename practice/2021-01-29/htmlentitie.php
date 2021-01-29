<!DOCTYPE html>
<html>
<head>
	<title>Htmlentities</title>
</head>
<?php

	if(isset($_GET['submit'])) {
		$name = htmlentities($_GET['name']);
		$email = $_GET['email'];
		if (
			!empty($name)
			&& !empty($email)
		) {
			echo $name.'<br>'.$email.'<br>';
			//echo html_entity_decode($name); //it will perfrom reverse operation then htmlentities.
		} else {
			echo 'please fill the value';
		}
	}

?>
<body>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<label>username</label>
		<input type="text" name="name"><br><br>
		<label>email</label>
		<input type="email" name="email"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>