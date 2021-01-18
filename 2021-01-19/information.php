<?php 
	error_reporting(0);
	// Personal Information
	$firstname  = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob_month = $_POST['month'];
	$dob_day = $_POST['day'];
	$dob_year = $_POST['year'];
	$gender = $_POST['gender'];

	//Account Information
	$email = $_POST['email'];
	$password = $_POST['password'];
	$security_que = $_POST['security_que'];
	$securityqueans = $_POST['securityqueans'];

	//Contact Information
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$contactnum = $_POST['contactnum'];
	$contact_num_type = $_POST['contact_num_type'];
	

	echo "<b>Firstname</b> : ".$firstname.
		"<br><b>Lastname :</b>".$lastname.
		"<br><b>Day of Birth :</b>".$dob_day.
		"<br><b>Month of Birth :</b>".$dob_month.
		"<br><b>Year of Birth :</b>".$dob_year.
		"<br><b>Gender :</b>".$gender.
		"<br><b>Email :</b>".$email.
		"<br><b>Security Question :</b>".$security_que.
		"<br><b>Security Question Answer :</b>".$securityqueans.
		"<br><b>Address :</b>".$address.
		"<br><b>City :</b>".$city.
		"<br><b>State :</b>".$state.
		"<br><b>Zipcode :</b>".$zipcode.
		"<br><b>Contact Number :</b>".$contactnum.
		"<br><b>Contact Number Type :</b>".$contact_num_type;
?>