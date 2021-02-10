<?php 
	require 'model/loginUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log-IN</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<h2>Login</h2>
	<form method="post" action="index.php" onsubmit="return checkLoginValidation()">
		<div>
			<label>
				<p>
					Email
					<span class="errorMessage" id="emailError">
						<?php if(isset($_POST['loginBtn'])){echo $emailError;} ?>
					</span>
				</p>
			</label>
			<input type="email" name="email" id="email">
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
		</div><br>

		<button type="submit" name="loginBtn">Login</button> 
		<button><a href="register.php">Register</a></button>
	</form>
	<footer>
		<script type="text/javascript" src='js/All.js'></script>
	</footer>
</body>
</html>