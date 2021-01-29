<h2>File Rename And Delete Practice.</h2>
<?php
	
	$file_name = 'delete_file.txt';
	$new_file_name = 'renamed_file.txt';	

	if(isset($_GET['create_file'])) {
		if(file_exists($file_name)) {
			echo 'File Already Exists';
		} else {
			fopen($file_name, 'w');
			echo 'File Create Successfully...';
		}
	}
	if(isset($_GET['delete_file'])) {
		if(file_exists($file_name)) {
			unlink($file_name);	
			echo 'File Delete';
		} else {
			echo 'File Already Deleted / File Not Exists';
		}
	}
	if(isset($_GET['rename_file'])) {
		if(file_exists($file_name)) {
			rename($file_name, $new_file_name);
			echo 'File Renamed Successfully...';
		} else {
			echo 'File Not Exists , Create First';
		}
	}

?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
	<button type="submit" name="create_file">Create File</button>
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
	<button type="submit" name="delete_file">Delete File</button>
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
	<button type="submit" name="rename_file">Rename File</button>
</form>

