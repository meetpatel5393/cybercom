<?php 

	//str_word_count function.
	$str1 = 'This is my first string example.';
	//echo(str_word_count($str1));
	//print_r(str_word_count($str1,2)); 

	//if second parameter is '0' then it only show count of word in string
	//if second parameter is '1' then it show word array with key 0,1,2...
	//if second parameter is '2' then in output array will show key of every word with their starting position and that value(word).


	//str_shuffle function
	//echo str_shuffle($str1); //generally this function is used to generate random file name from specific string.


	//substring function
	//echo substr($str1, 1,5);


	//string reverse function
	//echo strrev($str1);


	//similar text in two string
	$str2 = 'This is my second string';
	similar_text($str1, $str2, $res);//third parameter store percentage of similarity between two string.
	//echo $res;


	//trim string
	//echo trim($str2);//remove whitespace from left and right side of string.


	//addslashes function
	$str3 = 'this \is "string';
	echo addslashes($str3); //add slashe before ' , " , \ where this symbol encounter in string.

?>