<?php

	//word censoring example.
	$gmail = 'meetkapadiya97128@gmail.com';
	$replace = str_repeat('*', strlen($gmail)-12);
	echo $gmail.'<br>';
	echo substr_replace($gmail, $replace, 2,strlen($gmail)-12).'<br>';
	//Partially hide email address in PHP with word censoring.

?>