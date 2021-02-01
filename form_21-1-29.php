<!DOCTYPE html>
<html>
<head>
	<title>Form Extra Practice 2021-01-29</title>
</head>
<style type="text/css">
	span {
		color:red;
	}
</style>
<?php 
	$name= $email= $time= $classes= $gender= $subject='';
	$gendererr= $subjecterr= $emailerr= $agreeerr='';
	if(isset($_POST['submit'])) {
		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);
		$time = test_input($_POST['time']);
		$classes = test_input($_POST['classes']);

		if(!isset($_POST['gender'])) {
			$gendererr = 'Please select gender first<br>';
		} else {
			$gender = $_POST['gender'];
		}
		if(empty($_POST['subject'])) {
			$subjecterr = 'You must select 1 or more<br>';
		} else {
			foreach ($_POST['subject'] as $value) {
				$subject .= $value.',';
			}
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$emailerr = 'Invalid Email';
		}
		if(
			isset($_POST['gender'])
			&& !empty($_POST['subject'])
			&& !isset($_POST['agree'])
		) {
			$agreeerr = 'Please accept term and condition first';
		}
	}
	 function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<body>
	<h1>Absolute classes registration</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required="" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required="" value="<?php echo $email;?>"></td><span><?php echo $emailerr;?></span>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="number" name="time" value="<?php echo $time;?>"></td>
			</tr>
			<tr>
				<td>Classes</td>
				<td><textarea cols="30" rows="5" name="classes" value="<?php echo $classes;?>"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<span><?php echo $gendererr;?></span>
				</td>
			</tr>
			<tr>
				<td>Select</td>
				<td>
					<select name="subject[]" multiple="">
						<option value="Android">Android</option>
						<option value="Java">Java</option>
						<option value="PHP">PHP</option>
						<option value="C++">C++</option>
						<option value="C">C</option>
						<option value="Javascript">Javascript</option>
					</select>
					<span><?php echo $subjecterr;?></span>
				</td>
			</tr>
			<tr>
				<td>Agree</td>
				<td><input type="checkbox" name="agree"> <span><?php echo $agreeerr;?></span></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
<?php
	if(
		!empty($name)
		&& !empty($email)
		&& !empty($gender)
		&& isset($_POST['agree'])
	) {
		echo "<h2>Your given values are as :</h2>";
	    echo ("<p>Your name is : $name</p>");
	    echo ("<p> your email address is : $email</p>");
	    echo ("<p>Your class time at : $time</p>");
	    echo ("<p>your class info : $classes </p>");
	    echo ("<p>your gender is : $gender</p>");
	    echo ("<p>your subjects is : $subject</p>");
	}
?>
</html>