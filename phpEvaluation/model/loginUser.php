<?php 

	session_start();
	require 'connection.inc.php';

	if(isset($_POST['loginBtn'])) {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$emailError= $passwordError= '';
		if(
			empty($email)
			|| empty($password)
		){
			if(empty($email))
				$emailError = '* Please Enter E-mail';
			if(empty($password)) 
				$passwordError = '* Please Enter Password';
		} else {
			$obj = new DataBaseOperation();
			$sql = "SELECT id,email,password FROM user WHERE email='$email'";
			$result = $obj->selectData($sql);
			if($result->num_rows == 0) {
				$emailError = '* Please Register First';
			} else {
				$hash_password = md5($password);
				foreach ($result as $value) {
					if($value['password'] === $hash_password) {
						$_SESSION['userId'] = $value['id'];
						header('Location:blogPost.php');
					} else {
						$passwordError = 'Password is wrong';
					}
				}
			}
		}
	}

?>