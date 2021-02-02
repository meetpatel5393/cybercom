<!DOCTYPE html>
<html>
<head>
	<title>Form 3</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="form3.css">
	<script type="text/javascript" src="form3.js"></script>
</head>
<style type="text/css">
	.error::placeholder {
		color: rgba(0,0,0,0.7);
	}
	.err_msg{
		margin: 0px;
		padding: 0px;
		font-size: 13px;
		color: red;
	}
	.err_msg p {
		margin: 0px;
		padding: 0px;
		position: absolute;
		right: 30px;
		padding-top: 12px;
	}
</style>
<?php 

	session_start();
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$subject = trim($_POST['subject']);
		$message = trim($_POST['message']);

		if(
			empty($name)
			|| empty($email)
			|| empty($subject)
			|| empty($message)
		){
			if(empty($name))
				$name_err = '* Please Enter Name';
			if(empty($email)) 
				$email_err = '* Please Enter Email';
			if(empty($subject))
				$subject_err = '* Please Enter Subject';
			if(empty($message))
				$message_err = '* Please Enter Message';

		} else {
			$name_err= $email_err= $subject_err= $message_err= '';
			$sql = "INSERT INTO `table3`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
			$res = $con -> query($sql);
			if($res === TRUE) {
				$_SESSION['userData'] = " <h3>Form Successfully Submited!</h3>
					Name : $name<br>
					Email : $email<br>
					Subject : $subject<br>
					Message : $message";
				header("Location:form3.php");
			}
		}
	}
?>
<body>
	<div class="container-fluid m-0 p-3">
		<!-- contact us heading part -->
		<div class="container-fluid row m-0 p-0 ">
			<div class="container-fluid p-3 m-0 col-md-5 text-center text-white" id='contactus_div'>
				<h1>CONTACT US</h1>
			</div>
		</div>
		<div class="container-fluid row m-0 p-0">
			<div class="container-fluid p-4 m-0 col-md-5" id="form_div">
				<form action="form3.php" method="post" onsubmit="return check_validation()">
					<!-- name input field -->
					<div class="container-fluid m-0 p-3 row border bg-white">
						<div class="col-1 p-0 m-0 my-auto"><i class="fa fa-user-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0">
							<input type="text" id="name" name="name" placeholder="Name..." value="<?php if(isset($_POST[submit])){echo $name; } ?>">
						</div>
						<div class="container-fluid m-0 p-0 row err_msg">
							<p id="name_err"><?php if(isset($_POST['submit'])) echo $name_err; ?>	</p>
						</div>
					</div>
					<!-- email input field -->
					<div class="container-fluid m-0 mt-4 p-3 row border bg-white">
						<div class="col-1 p-0 m-0 my-auto"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0">
							<input type="email" id="email" name="email" placeholder="Email..." value="<?php if(isset($_POST[submit])){echo $email; } ?>">
						</div>
						<div class="container-fluid m-0 p-0 row err_msg">
							<p id="email_err"><?php if(isset($_POST['submit'])) echo $email_err; ?>	</p>
						</div>
					</div>
					<!-- subject input field -->
					<div class="container-fluid m-0 mt-4 p-3 row  border bg-white">
						<div class="col-1 p-0 m-0 my-auto"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0">
							<input type="text" id="subject" name="subject" placeholder="Subject..." value="<?php if(isset($_POST[submit])){echo $subject; } ?>">
						</div>
						<div class="container-fluid m-0 p-0 row err_msg">
							<p id="subject_err"><?php if(isset($_POST['submit'])) echo $subject_err; ?>	</p>
						</div>
					</div>
					<!-- comment input field -->
					<div class="container-fluid p-3 m-0 mb-4 mt-4 row border bg-white">
						<div class="col-1 p-0 pt-1 m-0"><i class="fa fa-comment-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0">
							<textarea name="message" id="message" placeholder="Message..."><?php if(isset($_POST[submit])){echo $message; } ?></textarea>
						</div>
						<div class="container-fluid m-0 p-0 row err_msg">
							<p id="message_err"><?php if(isset($_POST['submit'])) echo $message_err; ?>	</p>
						</div>
					</div>
					<!-- submit button -->
					<div class="container-fluid m-0 p-0 row">
						<button type="submit" name="submit" class="btn btn-primary m-0 p-4">SEND MESSAGE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_SESSION['userData'])){
		echo '<center>'.$_SESSION['userData'].'<center><br><br>';
	}
?>