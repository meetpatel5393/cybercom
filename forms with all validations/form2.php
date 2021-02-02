<!DOCTYPE html>
<html>
<head>
	<title>Form 2</title>
	<script type="text/javascript" src="form2.js"></script>
</head>
<style type="text/css">
	body {
		padding: 50px;
	}
	table{
		background-color: lightgreen;
		padding: 27px;
		border: 2px solid black;
	}
	td{
		padding: 10px;
	}
	p{
		margin: 0px;
	}
	h2{
		margin: 0px;
	}
	.error_msg {
		color: red;
		font-size: 12px;
	}
</style>
<?php
	session_start();
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {
		$name = trim($_POST['name']);
		$password = trim($_POST['password']);
		$gender = $_POST['gender'];
		$address = trim($_POST['address']);
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$game = '';
		$marital_status = $_POST['marital_status'];
		$agree = $_POST['agree'];
		$name_error= $password_error= $gender_error= $address_error= $dob_error= $game_error= 
		$marital_status_error= $agree_error='';

		foreach ($_POST['game'] as $value) {
			$game .= $value.' , ';
		}

		if(
			empty($name)
			|| empty($password)
			|| empty($gender)
			|| empty($address)
			|| empty($month)
			|| empty($day)
			|| empty($year)
			|| empty($game)
			|| empty($marital_status)
		){
			if(empty($name))
				$name_error = '* Please Enter Name';
			if(empty($password)) 
				$password_error = '* Please Enter Password';
			if(empty($gender))
				$gender_error = '* Please Select Gender';
			if(empty($address))
				$address_error = '* Please Enter Address';
			if(
				empty($month)
				|| empty($day)
				|| empty($year)
			) {
				$dob_error = '* Select Valid D.O.B';
			}
			if(empty($game))
				$game_error = '* Select At Least 1 Game';
			if(empty($marital_status))
				$marital_status_error = '* Select Marital Status';
		} else {
			$name_error= $password_error= $gender_error= $address_error= $dob_error= $game_error= $marital_status_error='';
			if(empty($agree)) {
				$agree_error = '* Accept agrement first';
			} else {
				$dob = $day.'-'.$month.'-'.$year;
				$agree_error = '';
				$sql = " INSERT INTO `table1`(`name`, `password`, `gender`, `address`, `dob`, `game`, `marital_status`) VALUES ('$name','$password','$gender','$address','$dob','$game','$marital_status'); ";
				$res = $con -> query($sql);
				if($res === TRUE) {
					$_SESSION['userData'] = " <h3>Form Successfully Submited!</h3>
						Name : $name<br>
						Gender : $gender<br>
						Address : $address<br>
						Date of Birth : $dob<br>
						Game : $game<br>
						Marital Status : $marital_status<br> ";
					header("Location:form2.php");
				}
			}
		}
	}
?>
<body onload="get_data()">
	<form method="post" action="form2.php" onsubmit="return check_validation()">
		<table>
			<tr>
				<td colspan="2">
					<center><h2>USER FORM</h2></center>
				</td>
			</tr>
			<tr>
				<td>First Name</td>
				<td>
					<input type="text" name="name" id="name" value="<?php if(isset($_POST[submit])){echo $name; } ?>">
					<span class="error_msg" id="name_error">
						<?php if(isset($_POST['submit'])) echo $name_error; ?>	
					</span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" id="password">
					<span class="error_msg" id="password_error">
						<?php if(isset($_POST['submit'])) echo $password_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td><p>Gender</p></td>
				<td>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<span class="error_msg" id="gender_error">
						<?php if(isset($_POST['submit'])) echo $gender_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td><p>Address</p></td>
				<td>
					<textarea rows="4" id="address" name="address">
						<?php if(isset($_POST[submit])){echo $address;} ?>
					</textarea>
					<span class="error_msg" id="address_error">
						<?php if(isset($_POST['submit'])) echo $address_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td><p>Date of Birth</p></td>
				<td>
					<select name="month" id="dob_month">
						<option value="" selected="" disabled="">Month</option>
					</select>
					<select name="day" id="dob_day">
						<option value="" selected="" disabled="">Day</option>
					</select>
					<select name="year" id="dob_year">
						<option value="" selected="" disabled="">Year</option>
					</select>
					<span class="error_msg" id="dob_error">
						<?php if(isset($_POST['submit'])) echo $dob_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td><p>Select Game</p></td>
				<td>
					<label><input type="checkbox" name="game[]" value="Hockey"><span>Hockey</span></label>
					<label><input type="checkbox" name="game[]" value="Football"><span>Football</span></label>
					<label><input type="checkbox" name="game[]" value="Cricket"><span>Cricket</span></label>
					<label><input type="checkbox" name="game[]" value="vollyball"><span>vollyball</span></label>
					<br>
					<span class="error_msg" id="game_error">
						<?php if(isset($_POST['submit'])) echo $game_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td><p>Marital status</p></td>
				<td>
					<input type="radio" name="marital_status" value="Married">Married
					<input type="radio" name="marital_status" value="Unmarried">Unmarried
					<span class="error_msg" id="marital_status_error">
						<?php if(isset($_POST['submit'])) echo $marital_status_error;?>
					</span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="reset">Reset</button>
					<button type="submit" name="submit">Submit</button>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="checkbox" name="agree" id="agree" value="agree">I accept this agrement
					<span class="error_msg" id="agree_error">
						<?php if(isset($_POST['submit'])) echo $agree_error;?>
					</span>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
	if(isset($_SESSION['userData'])) {
		echo $_SESSION['userData'];
	}
?>