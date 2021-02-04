<?php 

	/*
		use namespace practice.
	*/
	require "oop_part8.php";
	use functions\math_fun;
	use functions\print_fun;

	class fun extends print_fun //extends math_fun
	{

	}
	$fun1 = new fun();
	//echo $fun1->sum(1,2);
	echo $fun1->show_data('meet');


?>