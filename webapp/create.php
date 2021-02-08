<?php 
	require 'header.inc.php';
	require 'model/addContact.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid m-0 p-0 pl-4 pr-4 col-md-12" id="createContact_div">
		<div class="container-fluid m-0 p-0 pt-3 pb-3 border-bottom row">
			<h2>Create Contact</h2>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row" id="createContactInput_div">
			<form class="row m-0 p-0" method="post" action="create.php" onsubmit="return createContactValidation()">
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Name <span class="errorMessage" id="nameError">
						<?php if(isset($_POST['submit'])) {echo $nameError;} ?>
					</span></p>
					<input type="text" name="name" id="name" value="<?php if(isset($_POST['submit'])|| isset($_SESSION['id'])) {echo $name;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Email <span class="errorMessage" id="emailError">
						<?php if(isset($_POST['submit'])) {echo $emailError;} ?>
					</span></p>
					<input type="email" name="email" id="email" value="<?php if(isset($_POST['submit'])|| isset($_SESSION['id'])) {echo $email;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Phone <span class="errorMessage" id="phoneNumberError">
						<?php if(isset($_POST['submit'])) {echo $phoneNumberError;} ?>
					</span></p>
					<input type="number" name="phoneNumber" id="phoneNumber" 
					value="<?php if(isset($_POST['submit'])|| isset($_SESSION['id'])) {echo $phoneNumber;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Title <span class="errorMessage" id="titleError">
						<?php if(isset($_POST['submit'])) {echo $titleError;} ?>
					</span></p>
					<input type="text" name="title" id="title" value="<?php if(isset($_POST['submit'])|| isset($_SESSION['id'])) {echo $title;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Created <span class="errorMessage" id="createdError">
						<?php if(isset($_POST['submit'])) {echo $createdError;} ?>
					</span></p>
					<input type="text" name="created" id="created" value="<?php if(isset($_POST['submit'])|| isset($_SESSION['id'])) {echo $created;} ?>">
				</div>
				<div class="container-fluid col-md-12 p-0 m-0">
					<input style="width:15%;" type="submit" name="submit" class="btn bg-success text-white pl-3 pr-3" value="Create" id="createContactBtn">
				</div>
			</form>
		</div>
	</div>
	<footer>
		<script type="text/javascript" src="js/All.js"></script>
	</footer>
</body>
</html>