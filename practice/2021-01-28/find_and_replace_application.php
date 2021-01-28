<!DOCTYPE html>
<html>
<head>
	<title>Find and Replace application</title>
</head>
<?php

	error_reporting(0);
	if (isset($_POST['submit_btn'])) {
		$main_string = $_POST['main_string'];
		$search_for = $_POST['search_for'];
		$replace_with = $_POST['replace_with'];
		if(!empty($main_string)) {
			$str_pos = strpos($main_string ,$search_for);
			if(is_int($str_pos)) {
				$main_string = str_replace($search_for, $replace_with, $main_string);
			} else {
				echo "String not found";
			}
		} else {
			echo 'Fill all the value';
		}
	}

?>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method='post'>
		<label>Enter String Here..</label><br>
		<textarea rows="8" cols="30" name="main_string"><?php echo $main_string; ?></textarea><br><br>
		<label>Search For :</label><br>
		<input type="text" name="search_for" required=""><br><br>
		<label>Replace With :</label><br>
		<input type="text" name="replace_with" required=""><br><br>
		<button type="submit" name="submit_btn">Find and Replace</button>
	</form>
</body>
</html>