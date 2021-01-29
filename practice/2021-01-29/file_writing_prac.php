<h2>File Writing Practice</h2>
<?php

	$file_name = 'demo.txt';
	if (file_exists($file_name)) {
		echo $file_name.' is exist';

		//'r+' Open for reading and writing; place the file pointer at the beginning of the file.
		/*
		$file_handle = fopen($file_name, 'r+');
		$data = 'This is file writing practice file with mode "r+"';
		fwrite($file_handle, $data);
		*/

	} else {
		echo $file_name.' not exist';
	}


	//'w' Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
	/*
	$file_handle = fopen('demo.txt', 'w');
	$data = 'This is file writing practice file with mode "w"<br>';
	fwrite($file_handle, $data);
	*/


	//'a' Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
	/*
	$file_handle = fopen($file_name, 'a');
	$data = "This is file writing practice file with mode a \n"; // '\n' for move into nextline.
	fwrite($file_handle, $data);
	*/


	//'a+' Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
	/*
	$file_handle = fopen($file_name, 'a+');
	$data = 'This is file writing practice file with mode "a+"<br>';
	fwrite($file_handle, $data);
	//echo fread($file_handle, filesize($file_name));
	*/


	//'x' Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists give warning.If the file does not exist, attempt to create it.
	/*
	$file_handle = fopen('demo4.txt', 'x');
	$data = 'This is file writing practice file with mode "x"<br>';
	fwrite($file_handle, $data);
	*/
	//'x+'	Create and open for reading and writing; otherwise it has the same behavior as 'x'.

?>