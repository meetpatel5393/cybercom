<?php 
	require 'connection.inc.php';
	error_reporting(0);

	if(isset($_POST['registerBtn'])) {
		$prefix = trim($_POST['prefix']);
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		$email = trim($_POST['email']);
		$mobileNumber = trim($_POST['mobileNumber']);
		$password = trim($_POST['password']);
		$confirmPassword = trim($_POST['confirmPassword']);
		$information = trim($_POST['information']);
		$terms = trim($_POST['terms']);

		$prefixError= $firstnameError= $lastnameError= $emailError= $mobileError= $passwordError= $confirmPasswordError= $informationError= $agreeError= '';
		if(
			empty($prefix)
			|| empty($firstName)
			|| empty($lastName)
			|| empty($email)
			|| empty($mobileNumber)
			|| empty($password)
			|| empty($confirmPassword)
			|| empty($information)
		){
			if(empty($prefix))
				$prefixError = '* Please Enter prefix';
			if(empty($firstName))
				$firstnameError = '* Please Enter first Name';
			if(empty($lastName))
				$lastnameError = '* Please Select last name';
			if(empty($email))
				$emailError = '* Please Enter E-mail';
			if(empty($mobileNumber))
				$mobileError = '* Please Enter Phone Number';
			if(empty($password)) 
				$passwordError = '* Please Enter Password';
			if(empty($confirmPassword)) 
				$confirmPasswordError = '* Please Enter Password Again';
			if(empty($information)) 
				$informationError = '* Please Enter information';
		} else {
			$prefixError= $firstnameError= $lastnameError= $emailError= $mobileError= $passwordError= $confirmPasswordError= $informationError= '';
			$obj = new DataBaseOperation();
			$sql = "SELECT email FROM user WHERE email='$email'";
			$result = $obj->selectData($sql);
			if($result->num_rows != 0) {
				$emailError = '* Email already available';
			} else {
				if($password != $confirmPassword) {
					$confirmPasswordError = '* Please Enter Both Password Same';
				} else {
					if(empty($terms)) {
						$agreeError = '* Please select terms';
					} else {
						$hash_password = md5($password);
						$sql = "
							INSERT INTO `user`(`prefix`, `firstname`, `lastname`, `mobile`, `email`, `password`,`information`) VALUES ('$prefix','$firstName','$lastName','$mobileNumber','$email','$hash_password','$information')";
						$obj->insertData($sql);
						header('Location:index.php');

					}
				}
			}
		}
	}

?>