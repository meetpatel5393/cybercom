<?php 

	/*
		static method and properties.
	*/

	class classA
	{
		public static $a = 10;
		public static function show(){
			echo self::$a.' this is static method <br>';
		}
	}
	$obj1 = new classA();
	echo classA::$a.'<br>'; //access static variable
	classA::show(); //cal static method
	classA::$a = 20; //change value of static variable
	echo classA::$a.'<br>';

?>