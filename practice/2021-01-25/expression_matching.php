<?php 

	$string1 = 'this is expression matching task1';
	$regx = '/[a-z][0-9]/';
	echo(preg_match("$regx", $string1));//return 0 if pattern not found else return 1 if pattern is found.
	echo (preg_replace("/ss/", "mm", $string1));//replace string when pattern match and generate new string with replace string.

?>