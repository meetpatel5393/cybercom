<?php 

	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	echo 'First Name :'.$first_name.'<br>';
	echo 'Last Name :'.$last_name.'<br>';
	echo 'Date of Birth :'.$date.'-'.$month.'-'.$year.'<br>';
	echo 'Gender :'.$gender.'<br>';
	echo 'Country :'.$country.'<br>';
	echo 'Eamil :'.$email.'<br>';
	echo 'Phone Number:'.$number.'<br>';

?>