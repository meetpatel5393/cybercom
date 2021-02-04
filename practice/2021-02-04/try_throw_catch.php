<?php 
	
	$x = 10 ;
	$y = 0 ;
	
	try {
		if($y == 0) {
			throw new Exception("Can not divide by ZERO",23);
		}
	} catch (Exception $e) {
		echo 'Error Message : '.$e->getMessage().
		'<br> Exception Code : '.$e->getCode().
		'<br> Exception File : '.$e->getFile().
		'<br> Exception Line : '.$e->getLine();
	} finally {
		echo '<br><br>Finally Block Always Execute If There Is Exception Or Not<br><br>';
		echo '$e->getMessage() : Returns a string describing why the exception was thrown<br>
			$e->getCode() : Returns the exception code<br>
			$e->getFile() : Returns the full path of the file in which the exception was thrown<br>
			$e->getLine() : Returns the line number of the line of code which threw the exception ';
	}


?>