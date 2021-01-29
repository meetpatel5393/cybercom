<h2>Explode & Implode Function Practice</h2>
<?php

	//explode function practice.
	$file_name = 'demo2.txt';
	$file_handle = fopen($file_name, 'r');
	$data = fread($file_handle, filesize($file_name));
	$data_array = explode(',', $data);
	foreach ($data_array as $key => $value) {
		echo strtoupper($value).' ';
	}
	echo '<br>';
	echo implode(' - ', $data_array);

?>