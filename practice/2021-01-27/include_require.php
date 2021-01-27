<?php

	//include and require practice.
	echo 'HELLO WORLD';

	//include - if file doesn't exist then include just show warning and furuther code will execute successfully.
	include 'header.php';
	include 'header1.php'; 
	//$name = 'meet patel';
	echo $name.'<br>';

	//require - if file doesn't exist then require show error and kill rest of the page.
	//require 'header.php'; 

	echo 'Hello World<br>';

?>