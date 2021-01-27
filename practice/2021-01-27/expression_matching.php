<?php

	$site = 'www.php.com';
	$find = '/com|in|org/';
	//All of the echo statement give output 1 if pattern is found either give 0.
	echo preg_match($find, $site).'<br>'; //Find a match for any one of the patterns separated by |
	echo preg_match('/^abc/', 'abcxyz').'<br>'; //Finds a match as the beginning of a string as in: ^abc
	echo preg_match('/abc$/', 'xyzabc').'<br>'; //Finds a match at the end of the string as in: abc$
	echo preg_match('/\d/', 'abc2').'<br>'; //Find a digit
	echo preg_match('/\s/', 'abc2').'<br>'; //Find a whitespace character

?>