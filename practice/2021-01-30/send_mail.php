<h2>Sending Mail</h2>
<?php

	$to_email = 'meetpatel5383@gmail.com';
	$subject = 'Testing PHP Mail';
	$message = 'This mail is sent using the PHP mail function';
	$headers = 'From: darkwebdeveloper5393@gmail.com';

	if(isset($_POST['submit'])) {
		if(mail($to_email,$subject,$message,$headers)) {
			echo 'mail send';
			header('Location:send_mail.php');
		} else {
			echo 'mail not send';
		}
	}
	
?>
<form action="send_mail.php" method='post'>
	<button type="submit" name='submit'>Send Mail</button>
</form>