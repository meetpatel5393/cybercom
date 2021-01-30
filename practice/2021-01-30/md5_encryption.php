<h2>MD5 Encryption Practice</h2>
<?php

	//Hashing algorithms such as MD5, SHA1 and SHA256 are designed to be very fast and efficient. With modern techniques and computer equipment, it has become trivial to "brute force" the output of these algorithms, in order to determine the original input.Because of how quickly a modern computer can "reverse" these hashing algorithms, many security professionals strongly suggest against their use for password hashing.

	//MD5 = Message-Digest.
	$password = 'meetpatel' ;
	$hash_password = md5($password); //TRUE - Raw 16 character binary format , FALSE - Default. 32 character hex number.
	echo $hash_password.'<br>';
	//echo md5('MEETPATEL').'<br>';

	if($hash_password == md5($password)) {
		echo '<b>Same</b>';
	} else {
		echo '<b>Not Same</b>';
	}

	//MD5 File.
	$md5file = md5_file('data.txt'); //The md5_file() function calculates the MD5 hash of a file.
	echo '<br>'.$md5file;
?>