<h2>File Upload Practice</h2>
<?php

	if(isset($_POST['file_upload_btn'])) {
		$file_name = $_FILES['file']['name'];
		$temp_file_name = $_FILES['file']['tmp_name'];
		$type = $_FILES['file']['type'];
		print_r($_FILES['file']);
		$destination = 'upload_img/';
		if(
			$type == 'image/jpeg'
			|| $type == 'image/jpg'
			|| $type == 'image/png'
		) {
			if($_FILES['file']['size']>200000) {
				echo 'File is too large ';
			} else {
				if(move_uploaded_file($temp_file_name, $destination.$file_name)) {
					echo 'File Uploaded Successfully';
				} else {
					echo 'Can\'t upload file';
				}
			}
		} else {
			echo "Please Select Only Image";
		}
	}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" enctype='multipart/form-data'>
	<input type="file" name="file" multiple="" required="">
	<button type="submit" name="file_upload_btn">Upload</button>
</form>