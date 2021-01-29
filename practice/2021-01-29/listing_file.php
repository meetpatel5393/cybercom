<h2>Listing File Preactice.</h2>
<?php

	//Listing File Practice.
	$directory_path = getcwd();
	if($handle = opendir($directory_path)) {
		while ($file = readdir($handle)) {
			if(
				$file != '.'
				&& $file != '..'
			) {
				echo "<a href=$file>$file</a><br>";
			}
		}
	}

?>