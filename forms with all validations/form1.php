<!DOCTYPE html>
<html>
<head>
	<title>Form 1</title>
	<script type="text/javascript" src="form1.js"></script>
	<link rel="stylesheet" type="text/css" href="form1.css">
</head>
<?php 

	session_start();
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {
		$name = trim($_POST['name']);
		$password = trim($_POST['password']);
		$address = trim($_POST['address']);
		$game = '';
		$age = $_POST['age'];
		$file = $_POST['file'];
		$gender = $_POST['gender'];

		$name_error= $password_error= $gender_error= $address_error= $game_error= 
		$age_error= $file_error='';

		foreach ($_POST['game'] as $value) {
			$game .= $value.' , ';
		}

		if(
			empty($name)
			|| empty($password)
			|| empty($gender)
			|| empty($address)
			|| empty($game)
			|| empty($age)
			|| empty($file)
		){
			if(empty($name))
				$name_error = '* Please Enter Name';
			if(empty($password)) 
				$password_error = '* Please Enter Password';
			if(empty($gender))
				$gender_error = '* Please Select Gender';
			if(empty($address))
				$address_error = '* Please Enter Address';
			if(empty($game))
				$game_error = '* Select At Least 1 Game';
			if(empty($age))
				$age_error = '* Select Age Type';
			if(empty($file))
				$file_error = '* Select File';
		} else {
			$name_error= $password_error= $gender_error= $address_error= $game_error= 
			$age_error= $file_error='';
			$hash_password = md5($password);

			$sql = " INSERT INTO `table5`(`name`, `password`, `game`, `age`, `file`, `address`) VALUES ('$name','$hash_password','$game','$age','$file','$address') ";
			$res = $con -> query($sql);
			if($res === TRUE) {
				$_SESSION['form1_data'] = " 
				<div id='form1_data'>
				<h3>Form Successfully Submited!</h3>
					Name : $name<br>
					Gender : $gender<br>
					Address : $address<br>
					Game : $game<br>
					Age : $age<br>
					File : $file<br>
					</div>";
				header("Location:form1.php");
			}
		}
	}
?>
<body>
	<div class="container-fluid m-0 p-5 row">
		<div class="container-fluid m-0 p-2 col-8 border">
			<table>
				<form method="post" id="form1" action="form1.php" onsubmit="return check_validation()">
					<tr>
						<td id="header" colspan="2"><h2>User Form</h2></td>
					</tr>
					<tr>
						<td><p>Enter Name</p></td>
						<td>
							<input type="text" id="name" name="name" value="<?php if(isset($_POST[submit])){echo $name; } ?>">
							<div class="err_msg">
								<p id="name_error"><?php if(isset($_POST['submit'])) echo $name_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td><p>Enter Password</p></td>
						<td>
							<input type="password" id="password" name="password">
							<div class="err_msg">
								<p id="password_error"><?php if(isset($_POST['submit'])) echo $password_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td><p>Enter Address</p></td>
						<td>
							<textarea rows="4" id="address" name="address"><?php if(isset($_POST[submit])){echo $address; } ?></textarea>
							<div class="err_msg">
								<p id="address_error"><?php if(isset($_POST['submit'])) echo $address_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td><p>Select Game</p></td>
						<td>
							<div>
							<label><input type="checkbox" name="game[]" value="Hockey"><span>Hockey</span></label><br>
							<label><input type="checkbox" name="game[]" value="Football"><span>Football</span></label><br>
							<label><input type="checkbox" name="game[]" value="Badminton"><span>Badminton</span></label><br>
							<label><input type="checkbox" name="game[]" value="Cricket"><span>Cricket</span></label><br>
							<label><input type="checkbox" name="game[]" value="vollyball"><span>vollyball</span></label>
							</div>
							<p id="game_error"><?php if(isset($_POST['submit'])) echo $game_error; ?></p>
						</td>
					</tr>
					<tr>
						<td><p>Gender</p></td>
						<td>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
							<div class="err_msg">
								<p id="gender_error"><?php if(isset($_POST['submit'])) echo $gender_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td>Select your age</td>
						<td>
							<select id="age" name="age">
								<option value="" disabled="" selected="">select</option>
								<option value="Kid" >Kid</option>
								<option value="Teenage">Teenage</option>
								<option value="Adult">Adult</option>
							</select>
							</div>
							<div class="err_msg">
								<p id="age_error"><?php if(isset($_POST['submit'])) echo $age_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="file" id="file" name="file">
							<div class="err_msg">
								<p id="file_error"><?php if(isset($_POST['submit'])) echo $file_error; ?></p>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="reset">Reset</button>
							<button type="submit" name="submit">Submit</button>
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>

<?php
	if(isset($_SESSION['form1_data']))
		echo $_SESSION['form1_data'];
?>