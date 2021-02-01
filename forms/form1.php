<?php

	$name = $_POST['name'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$game = '';
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$file = $_POST['file'];

	//echo $name.$password.$address.$gender.$age.$file;
	foreach ($_POST['game'] as $value) {
		$game .= $value.' , ';
	}

	echo 'Name :'.$name.'<br>';
	echo 'Address :'.$address.'<br>';
	echo 'Game :'.$game.'<br>';
	echo 'Gender :'.$gender.'<br>';
	echo 'Age :'.$age.'<br>';
	echo 'File :'.$file.'<br>';

?>