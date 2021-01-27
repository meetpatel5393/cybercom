<?php

	//string function
	$str = ' This is String is Function isPractice File is';

	echo strlen($str)."<br>";//calculate string length.
	echo strtolower($str)."<br>"; //convert whole string to lower case.
	echo strtoupper($str)."<br>"; //convert whole string to upper case.
	echo str_repeat('meet ', 5)."<br>"; //repeat given string multiple time as per define number in second parameter.
	echo strpos($str , 'is' , 4)."<br>"; //this function find the position of the first occurrence of substring in a string. Here third parameter(offset) is specifie the starting position from where our substring will be start to find.

	$str_pos = strpos($str, 'is');
	while($str_pos) {
		echo ' "is" found at '.$str_pos.'<br>';
		$str_pos = strpos($str, 'is', $str_pos+strlen('is'));
	} //to find each and every position where given substring is placed.
	echo "<br>";

	echo substr_replace($str, 'mk', 2 , 8);
	echo '<br>';
	//third parameter specifie that from which position we want to replace a string.
	//forth parameter specifie that how many character we want to replace.

	$find = array('is','Function','File');
	echo str_replace('is', 'mk', $str).'<br>'; // first parameter is string which we want to replace.
	echo str_replace($find, ' ', $str).'<br>'; //we can also pass an array of string which we want to replace.
	echo trim($str).'<br>'; // remove space from left and right side of string.
	echo is_string($str);

?>