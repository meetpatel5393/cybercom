<?php
	
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		if(empty($comment)) {
			echo '<h3>please enter comment</h3>';
		} else {
			if(
				strlen($name)>25
				|| strlen($email)>50
				|| strlen($comment)>500
			) {
				echo '<h3>Sorry, maxlength for some field has been exceeded</h3>';
			} else {
				//mail send here
				$to_email = 'darkwebdeveloper5393@gmail.com';
				$subject = 'Contact form submitted';
				$body = $name."\n".$comment;
				$headers = "From: $email";

				if(mail($to_email, $subject, $body,$headers)) {
					echo '<h1>Thanks for contacting us. We\'ll be in touch soon.</h1> You\'ll be redirected...';
					header( "refresh:3;url=contact_form.php" );
				} else {
					echo '<h3>There is some issue in sending mail</h3>';
				}
			}
		}
	}

?>