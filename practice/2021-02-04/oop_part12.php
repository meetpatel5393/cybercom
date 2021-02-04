<?php

	/*
		Type hinting.
	*/



	function IntTypeHinting(int $var) {
		echo 'This is Int Type Hinting function which is only allow int value in argument of function.<br>';
	}
	//IntTypeHinting('ss'); // Uncaught TypeError: Argument 1 passed to IntTypeHinting() must be of the type integer, string given.
	//IntTypeHinting("string"); // Fatal error: Uncaught TypeError: Argument 1 passed to IntTypeHinting() must be of the type integer, string given.
	//IntTypeHinting('25kjh'); //Notice: A non well formed numeric value encountered.
	IntTypeHinting('5.5'); //this will allow
	IntTypeHinting(5.5); //this will also allow
	IntTypeHinting(5); //this will allow
	IntTypeHinting(2/1); //this will allow



	function StringTypeHinting(string $var) {
		echo 'This is String Type Hinting function which is only allow String value in argument of function.<br>';
	}



	function ArrayTypeHinting(array $var) {
		echo 'This is Array Type Hinting function which is only allow Array value in argument of function.<br>';
	}
	$arr = [1,2,3];
	//ArrayTypeHinting(2); //fatal error
	//ArrayTypeHinting('skdhg'); //fatal error
	//ArrayTypeHinting(2.5); //fatal error
	//ArrayTypeHinting(true); //fatal error
	//ArrayTypeHinting(null); //fatal error
	ArrayTypeHinting($arr); //successfully execute.



	function ObjectTypeHinting(object $var) { //here object will allow all the object means any class of object. but if we speicife there a class name so it will only allow that particular class of object.
		echo 'This is Object Type Hinting function which is only allow Object in argument of function.<br>';
	}
	class abc {}
	class xyz {}
	$obj1 = new abc();
	$obj2 = new xyz();
	//ObjectTypeHinting(2); //fatal error
	//ObjectTypeHinting(2.5); //fatal error
	//ObjectTypeHinting('skbj'); //fatal error
	ObjectTypeHinting($obj2); //successfully execute



	/* 
		this all function return true if the value given in 
		parameter is type of that specified function
	*/
	echo is_int(2).'<br>';
	echo is_bool(true).'<br>';
	echo is_null(null).'<br>';
	echo is_string('string').'<br>';
	echo is_float(2.5).'<br>';

?>