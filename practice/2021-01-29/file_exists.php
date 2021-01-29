<h2>File Exists Function</h2>
<?php

	$file_name = 'demo.txt';
	if(file_exists($file_name)) {
		echo 'File Exists<br>';
		$file_handle = fopen($file_name, 'r');
		echo fread($file_handle, filesize($file_name));
		fclose($file_handle);
	} else {
		echo 'File Doesn\'t Exists';
	}

?>