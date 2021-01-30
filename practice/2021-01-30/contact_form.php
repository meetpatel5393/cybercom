<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="contact_form.css">
</head>
<body>
	<div class="container-fluid m-0 p-0">
		<!-- contact us heading part -->
		<div class="container-fluid row justify-content-center m-0 p-0 ">
			<div class="container-fluid p-5 m-0 col-md-6 text-center text-white" id='contactus_div'>
				<h1>CONTACT US</h1>
			</div>
		</div>
		<div class="container-fluid row justify-content-center m-0 p-0">
			<div class="container-fluid p-5 m-0 col-md-6" id="form_div">
				<form action="contact_form_backend.php" method="post">
					<!-- name input field -->
					<div class="container-fluid m-0 mb-3 p-3 row justify-content-center border bg-white">
						<div class="col-1 p-0 m-0 my-auto"><i class="fa fa-user-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0"><input type="text" name="name" placeholder="Full Name" required=""></div>
					</div>
					<!-- email input field -->
					<div class="container-fluid m-0 mb-3 p-3 row justify-content-center border bg-white">
						<div class="col-1 p-0 m-0 my-auto"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0"><input type="email" name="email" placeholder="Eg. example@gmail.com" required=""></div>
					</div>
					<!-- comment input field -->
					<div class="container-fluid m-0 mb-4 row justify-content-center border bg-white">
						<div class="col-1 p-0 pt-1 m-0"><i class="fa fa-comment-o" aria-hidden="true"></i></div>
						<div class="col-10 p-0 pl-1 m-0"><textarea name="comment" placeholder="Your comments.."></textarea></div>
					</div>
					<!-- submit button -->
					<div class="container-fluid m-0 row justify-content-center">
						<button type="submit" name="submit" class="btn btn-primary m-0 p-2 pl-4 pr-4">SEND NOW</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>