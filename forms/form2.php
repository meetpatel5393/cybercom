<?php

	$name = $_POST['name'];
	//$password = $_POST['password'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$game = '';
	$marital_status = $_POST['marital_status'];

	//echo $name.$password.$address.$gender.$age.$file;
	foreach ($_POST['game'] as $value) {
		$game .= $value.' , ';
	}

	echo 'Name :'.$name.'<br>';
	echo 'Address :'.$address.'<br>';
	echo 'Game :'.$game.'<br>';
	echo 'Gender :'.$gender.'<br>';
	echo 'Date of Birth :'.$day.'-'.$month.'-'.$year.'<br>';
	echo 'Marital status :'.$marital_status.'<br>';

?>