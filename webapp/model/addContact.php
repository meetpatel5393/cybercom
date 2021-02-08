<?php 
	
	require 'connection.inc.php';

	if(isset($_POST['submit'])) {

		$name = strip_tags(trim($_POST['name']));
		$email = strip_tags(trim($_POST['email']));
		$phoneNumber = $_POST['phoneNumber'];
		$title = strip_tags(trim($_POST['title']));
		$created = strip_tags(trim($_POST['created']));
		$nameError= $emailError= $phoneNumberError= $titleError= $createdError= '';

		if(
			empty($name)
			|| empty($email)
			|| empty($phoneNumber)
			|| empty($title)
			|| empty($created)
		) {
			if(empty($name))
				$nameError = '* Please enter name';
			if(empty($email))
				$emailError = '* Please enter email';
			if(empty($phoneNumber))
				$phoneNumberError = '* Please enter phone number';
			if(empty($title))
				$titleError = '* Please enter title';
			if(empty($created))
				$createdError = '* Please enter created time';
			return false;
		} else {
			$nameError= $emailError= $titleError= $createdError= '';
			if(strlen($phoneNumber) != 10) {
				$phoneNumberError = '* Phone number must be 10 digit';
				return false;
			}
			else {
				$obj = new DataBaseOperation();
				$query = "INSERT INTO `contactdetail`(`name`, `email`, `phoneNumber`, `title`, `created`) VALUES ('$name','$email','$phoneNumber','$title','$created')";
				$obj->insertData($query);
				header('Location:./contacts.php?successMsg=Contact successfully created');
			}
		}
	}

?>