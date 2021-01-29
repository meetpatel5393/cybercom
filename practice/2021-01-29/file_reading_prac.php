<h2>File Reading Practice</h2>
<?php

	$file_name = 'demo.txt';

	//'r' Open for reading only; place the file pointer at the beginning of the file, if file not available give warning.
	/*
	$file_handle = fopen($file_name, 'r');
	echo fread($file_handle,filesize($file_name));//read file data from file.
	*/


	//file() function. 	Reads a file into an array
	$data_array = file($file_name);
	print_r($data_array);

?>