<?php 
	require 'model/registerUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<form method="post" action="register.php" onsubmit="return checkRegistrationValidation()">
		<h3>REGISTER</h3>
		<div>
			<label>
				<p>
					prefix
					<span class="errorMessage" id="prefixError">
						<?php if(isset($_POST['registerBtn'])){echo $prefixError;} ?>
					</span>
				</p>
			</label>
			<select name="prefix" id="prefix">
				<option selected="" disabled="" value=""></option>
				<option value="mr">MR.</option>
				<option value="mrs">MRS.</option>
			</select>
		</div>

		<div>
			<label>
				<p>
					First Name
					<span class="errorMessage" id="firstnameError">
						<?php if(isset($_POST['registerBtn'])){echo $firstnameError;} ?>
					</span>	
				</p>
			</label>
			<input type="text" name="firstName" id="firstName" value="<?php if(isset($_POST['registerBtn'])){echo $firstName;} ?>">
		</div>

		<div>
			<label>
				<p>
					Last Name
					<span class="errorMessage" id="lastnameError">
						<?php if(isset($_POST['registerBtn'])){echo $lastnameError;} ?>
					</span>
				</p>
			</label>
		 <input type="text" name="lastName" id="lastName" value="<?php if(isset($_POST['registerBtn'])){echo $lastName;} ?>">
		</div>

		<div>
			<label>
				<p>
					Email
					<span class="errorMessage" id="emailError">
						<?php if(isset($_POST['registerBtn'])){echo $emailError;} ?>
					</span>
				</p>
			</label>
			<input type="email" name="email" id="email" value="<?php if(isset($_POST['registerBtn'])){echo $email;} ?>">
		</div>

		<div>
			<label>
				<p>
					Mobile Number
					<span class="errorMessage" id="mobileError">
						<?php if(isset($_POST['registerBtn'])){echo $mobileError;} ?>
					</span>
				</p>
			</label>
			<input type="number" name="mobileNumber" id="mobileNumber" value="<?php if(isset($_POST['registerBtn'])){echo $mobileNumber;} ?>">
		</div>

		<div>
			<label>
				<p>
					Password
					<span class="errorMessage" id="passwordError">
						<?php if(isset($_POST['registerBtn'])){echo $passwordError;} ?>
					</span>
				</p>
			</label>
			<input type="password" name="password" id="password">
		</div>

		<div>
			<label>
				<p>
					Confirm Password
					<span class="errorMessage" id="confirmPasswordError">
						<?php if(isset($_POST['registerBtn'])){echo $confirmPasswordError;} ?>
					</span>
				</p>
			</label>
		 	<input type="password" name="confirmPassword" id="confirmPassword">
		</div>

		<div>
			<label>
				<p>
					Information
					<span class="errorMessage" id="informationError">
						<?php if(isset($_POST['registerBtn'])){echo $informationError;} ?>
					</span>
				</p>
			</label>
			<textarea name="information" id="information"><?php if(isset($_POST['registerBtn'])){echo $information;} ?></textarea>
		</div>

		<div>
			<label>
				<input type="checkbox" name="terms" id="terms" value="terms"> Hereby , I Accept Terms & Conditions
				<span class="errorMessage" id="agreeError">
					<?php if(isset($_POST['registerBtn'])){echo $agreeError;} ?>
				</span>
			</label>
		</div><br>

		<button type="submit" name="registerBtn">SUBMIT</button>
	</form>

	<footer>
		<script type="text/javascript" src="js/All.js"></script>
	</footer>
</body>
</html>