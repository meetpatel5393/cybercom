<!DOCTYPE html>
<html>
<head>
	<title>Form 5</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="form5.js"></script>
</head>
<style type="text/css">
	body{
		background: rgba(0,0,0,0.1);
	}
	h2{
		display: inline;
	}
	.fa{
		font-size: 30px;
	}
	input{
		width: 100%;
		background: rgba(0,0,0,0.05);
		border: none;
		outline: none;
		padding:3px;
	}
	p{
		margin:0px;
		color: rgba(0,0,0,0.6);
	}
	#main_con {
		border-radius: 20px;
		overflow: hidden;
		box-shadow: 7px 0px 10px rgba(0,0,0,0.1),-7px 0px 10px rgba(0,0,0,0.1);
	}
	.btn{
		box-shadow: 4px 0px 10px rgba(0,0,0,0.2);
		transition: 0.5s;
	}
	.btn:hover{
		transform: scale(1.05);
		transition: 0.5s;
	}
	.error_msg {
		font-size: 13px;
		color: red;
		padding-left: 10px;
	}
</style>
<?php 

	session_start();
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$email_error= $password_error= '';

		if(
			empty($email)
			|| empty($password)
		){
			if(empty($email))
				$email_error = '* Please Enter Name';
			if(empty($password)) 
				$password_error = '* Please Enter Password';
		} else {
			$email_error= $password_error= '';
			$hash_password = md5($password);
			$sql = "INSERT INTO `table2`(`email`, `password`) VALUES ('$email','$hash_password');";
			$res = $con -> query($sql);
			if($res === TRUE) {
				$_SESSION['userData'] = " <h3>Form Successfully Submited!</h3>
					Email : $email<br>";
				header("Location:form5.php");
			}
		}
	}
?>
<body>
	<form method="post" action="form5.php" onsubmit="return check_validation()" class="container-fluid m-0 p-3 row justify-content-center">
		<div class="container-fluid m-0 p-0 bg-white col-md-4" id="main_con">
			<div class="container-fluid m-0 p-2 row bg-danger text-white">
				<span class="p-2"><i class="fa fa-lock text-white" aria-hidden="true"></i></span>
				<h2 class="pl-2">Sign In</h2>
			</div>
			<div class="container-fluid m-0 p-0 row">
				<div class="container-fluid m-0 p-4 col">
					<div class="container-fluid m-0 p-0 pb-3 row">
						<p>E-mail address</p>
						<span class="error_msg" id="email_error">
							<?php if(isset($_POST['submit'])) echo $email_error;?>	
						</span>
					</div>
					<div class="container-fluid m-0 p-0 pb-2 row">
						<input type="email" name="email" id="email" value="<?php if(isset($_POST[submit])){echo $email; } ?>">
					</div>
					<div class="container-fluid m-0 p-0 pb-3 row">
						<p>Password</p>
						<span class="error_msg" id="password_error">
							<?php if(isset($_POST['submit'])) echo $password_error;?>
						</span>
					</div>
					<div class="container-fluid m-0 p-0 row">
						<input type="password" name="password" id="password">
					</div>
				</div>
			</div>
			<div class="container-fluid m-0 p-0 pb-3 row justify-content-center">
				<button class="btn bg-success text-white pl-4 pr-4" type="submit" name="submit">Sign In</button>
			</div>
		</div>
	</form>
</body>
</html>
<?php
	if(isset($_SESSION['userData'])) {
		echo '<center>'.$_SESSION['userData'].'</center>';
	}
?>