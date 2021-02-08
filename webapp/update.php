<?php 
	require 'header.inc.php';
	require 'model/updateContact.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid m-0 p-0 pl-4 pr-4 col-md-12" id="createContact_div">
		<div class="container-fluid m-0 p-0 pt-3 pb-3 border-bottom row">
			<h2>Update Contact #<?php if(isset($_GET['id'])||isset($_POST['updateContact'])){echo $id;} ?></h2>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row" id="createContactInput_div">
			<form class="row m-0 p-0" method="post" action="update.php" onsubmit="return createContactValidation()">
				<input type="text" name="hiddenId" value="<?php if(isset($_GET['id'])||isset($_POST['updateContact'])) {echo $id;} ?>" hidden>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Name <span class="errorMessage" id="nameError">
						<?php if(isset($_POST['updateContact'])) {echo $nameError;} ?>
					</span></p>
					<input type="text" name="name" id="name" 
					value="<?php if(isset($_POST['updateContact']) || isset($_GET['id'])) {echo $name;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Email <span class="errorMessage" id="emailError">
						<?php if(isset($_POST['updateContact'])) {echo $emailError;} ?>
					</span></p>
					<input type="email" name="email" id="email" 
					value="<?php if(isset($_POST['updateContact']) || isset($_GET['id'])) {echo $email;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Phone <span class="errorMessage" id="phoneNumberError">
						<?php if(isset($_POST['updateContact'])) {echo $phoneNumberError;} ?>
					</span></p>
					<input type="number" name="phoneNumber" id="phoneNumber" 
					value="<?php if(isset($_POST['updateContact']) || isset($_GET['id'])) {echo $phoneNumber;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Title <span class="errorMessage" id="titleError">
						<?php if(isset($_POST['updateContact'])) {echo $titleError;} ?>
					</span></p>
					<input type="text" name="title" id="title" 
					value="<?php if(isset($_POST['updateContact']) || isset($_GET['id'])) {echo $title;} ?>">
				</div>
				<div class="container-fluid col-md-6 p-0 m-0">
					<p>Created <span class="errorMessage" id="createdError">
						<?php if(isset($_POST['updateContact'])) {echo $createdError;} ?>
					</span></p>
					<input type="text" name="created" id="created" 
					value="<?php if(isset($_POST['updateContact']) || isset($_GET['id'])) {echo $created;} ?>">
				</div>
				<div class="container-fluid col-md-12 p-0 m-0">
					<button type="submit" name="updateContact" class="btn bg-success text-white pl-4 pr-4">Update</button>
				</div>
			</form>
		</div>
	</div>
	<footer>
		<script type="text/javascript" src="js/All.js"></script>
	</footer>
</body>
</html>