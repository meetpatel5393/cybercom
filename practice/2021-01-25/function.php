<?php 
	
	//function without argument we can still call with argument in it , how ??

	show();
	function show(){
		echo "Done<br>";
	}
	function show1($name){
		echo "My name is..$name<br>";
	}
	show1('meet');
	//show function not have any parameter in declaration but we still execute with passing parameter.


	function add($num1 , $num2){
		return $num1 + $num2;
	}
	function devide($num1 , $num2){
		return $num1 / $num2;
	}
	echo devide(add(10,10),add(5,5))."<br>";


	$global_var = 'this is global variable';
	function show_global(){
		global $global_var;
		echo 'i will print global variable here...'.$global_var.'<br>';
	}
	show_global();

?>