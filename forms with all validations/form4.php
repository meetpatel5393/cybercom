<!DOCTYPE html>
<html>
<head>
	<title>Form 2</title>
	<script type="text/javascript" src="form4.js"></script>
</head>
<style type="text/css">
	h5 {
		background: orange;
		padding:15px;
		margin: 0px;
		color:yellow;
		font-size:20px;
	}
	table {
		background: #181938;
		color: white;
		padding: 0px;
		width: 400px;
		border-collapse: collapse;
	}
	td {
		padding-bottom: 10px;
	}
	.heading {
		text-align: right;
		padding-right: 15px;
		color:yellow;
	}
	p{
		padding: 0px;
		margin: 10px;
	}
	span {
		color: yellow;
	}
	#btn{
		background: orange;
		padding: 15px;
	}
	button {
		padding: 10px 15px 10px 15px;
		color: white;
		border: none;
		float: right;
	}
	#submit{
		background: #32CD32;
	}
	#cancle{
		background: #CD5C5C;
		margin-left: 5px;
	}
	.agree{
		padding-top: 5px;
		padding-bottom: 10px;
	}
	.err_msg {
		color: red;
		padding: 3px;
		margin: 0px;
		position: absolute;
		font-size: 12px;
	}
	.err_msg p {
		margin: 0px;
	}
	#form4_data {
		position: absolute;
		top: 10%;
		left: 40%;
		font-size: 20px;
	}
</style>
<?php 

	session_start();
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$date = $_POST['date'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$email = trim($_POST['email']);
		$number = trim($_POST['number']);
		$password = trim($_POST['password']);
		$confirm_password = trim($_POST['confirm_password']);
		$agree = $_POST['agree'];

		$firstname_error= $lastname_error= $dob_error= $gender_error= $country_error= $email_error= 
		$number_error= $password_error= $confirm_password_error= $agree_error= '';

		if(
			empty($fname)
			|| empty($lname)
			|| empty($date)
			|| empty($month)
			|| empty($year)
			|| empty($gender)
			|| empty($country)
			|| empty($email)
			|| empty($number)
			|| empty($password)
			|| empty($confirm_password)
		){
			if(empty($fname))
				$firstname_error = '* Please Enter First Name';
			if(empty($lname))
				$lastname_error = '* Please Enter Last Name';
			if(
				empty($month)
				|| empty($day)
				|| empty($year)
			) {
				$dob_error = '* Select Valid D.O.B';
			}
			if(empty($gender))
				$gender_error = '* Please Select Gender';
			if(empty($country))
				$country_error = '* Please Select Country';
			if(empty($email))
				$email_error = '* Please Enter E-mail';
			if(empty($number))
				$number_error = '* Please Enter Phone Number';
			if(empty($password)) 
				$password_error = '* Please Enter Password';
			if(empty($confirm_password)) 
				$confirm_password_error = '* Please Enter Password Again';
		} else {
			$firstname_error= $lastname_error= $dob_error= $gender_error= $country_error= $email_error= 
			$number_error= $password_error= $confirm_password_error= '';

			if($password != $confirm_password) {
				$confirm_password_error = '* Please Enter Both Password Same';
			} else {
				if(empty($agree)) {
					$agree_error = '* Accept agrement first';
				} else {
					$dob = $date.'-'.$month.'-'.$year;
					$hash_password = md5($password);
					$sql = " INSERT INTO `table4`(`first_name`, `last_name`, `dob`, `gender`, `country`, `email`, `phone_number`, `password`) VALUES ('$fname','$lname','$dob','$gender','$country','$email','$number','$hash_password')";
					$res = $con -> query($sql);
					if($res === TRUE) {
						$_SESSION['form4'] = "
							<div id='form4_data'>
								<h3>Form Successfully Submited!</h3>
								First Name : $fname<br>
								Last Name : $lname<br>
								Date of Birth : $dob<br>
								Gender : $gender<br>
								Country : $country<br>
								E-mail : $email<br>
								Phone Number : $number<br>
							</div>";
						header("Location:form4.php");
					}
				}
			}
		}
	}
?>
<body onload="get_data()">
	<form method="post" action="form4.php" onsubmit="return check_validation()">
		<table>
			<tr>
				<td colspan="2">
					<h5>Sign Up</h5>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>First Name</p></td>
				<td>
					<input type="text" name="fname" id="fname" placeholder="Enter First Name" value="<?php if(isset($_POST[submit])){echo $fname; } ?>">
					<div class="err_msg">
						<p id="firstname_error"><?php if(isset($_POST['submit'])) echo $firstname_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Last Name</p></td>
				<td>
					<input type="text" name="lname" id="lname" placeholder="Enter Last Name" value="<?php if(isset($_POST[submit])){echo $lname; } ?>">
					<div class="err_msg">
						<p id="lastname_error"><?php if(isset($_POST['submit'])) echo $lastname_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Date of Birth</p></td>
				<td>
					<select name="date" id="dob_day">
						<option value="" selected="" disabled="">Date</option>
					</select>
					<select name="month" id="dob_month">
						<option value="" selected="" disabled="">Month</option>
					</select>
					<select name="year" id="dob_year">
						<option value="" selected="" disabled="">Year</option>
					</select>
					<div class="err_msg">
						<p id="dob_error"><?php if(isset($_POST['submit'])) echo $dob_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Gender</p></td>
				<td>
					<label><input type="radio" name="gender" value="male"><span>Male</span></label>
					<label><input type="radio" name="gender" value="female"><span>Female</span></label>
					<div class="err_msg">
						<p id="gender_error"><?php if(isset($_POST['submit'])) echo $gender_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Country</p></td>
				<td>
					<select id="country" name="country">
						<option value="" selected="" disabled="">Country</option>
						<option>India</option>
						<option>Aafrica</option>
						<option>Dubai</option>
					</select>
					<div class="err_msg">
						<p id="country_error"><?php if(isset($_POST['submit'])) echo $country_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>E-mail</p></td>
				<td>
					<input type="email" name="email" id="email" placeholder="Enter Email" value="<?php if(isset($_POST[submit])){echo $email; } ?>">
					<div class="err_msg">
						<p id="email_error"><?php if(isset($_POST['submit'])) echo $email_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Phone</p></td>
				<td>
					<input type="number" name="number" id="number" placeholder="Enter Phone" value="<?php if(isset($_POST[submit])){echo $number; } ?>">
					<div class="err_msg">
						<p id="number_error"><?php if(isset($_POST['submit'])) echo $number_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Password</p></td>
				<td>
					<input type="password" name="password" id="password">
					<div class="err_msg">
						<p id="password_error"><?php if(isset($_POST['submit'])) echo $password_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td class="heading"><p>Confrim Password</p></td>
				<td>
					<input type="password" name="confirm_password" id="confirm_password">
					<div class="err_msg">
						<p id="confirm_password_error"><?php if(isset($_POST['submit'])) echo $confirm_password_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="agree">
					<label><input type="checkbox" name="agree" id="agree" value="agree">
					<span>I Agree to the Terms if use</span></label>
					<div class="err_msg">
						<p id="agree_error"><?php if(isset($_POST['submit'])) echo $agree_error; ?>	</p>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" id="btn">
					<button type="reset" id="cancle">Cancle</button>
					<button type="submit" name="submit" id="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_SESSION['form4']))
		echo $_SESSION['form4'];
?>