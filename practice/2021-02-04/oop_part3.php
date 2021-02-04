<?php 

	/*
		constance.
	*/
	class constance_practice
	{
		const DOB = '29-08-2000'; //we can't not write '$' before constance name.
		function show_constance_value() {
			echo self::DOB.' : Access constance via function (to access constance within class we need "self" keyword with scope resolution operator (::) Eg. self::constance_name )';
		}
	}

	echo constance_practice::DOB.' : Access constance via class name <br>';

	$obj1 = new constance_practice();
	//$obj1->DOB;//we can't access constance via object of that class.
	$obj1->show_constance_value();

?>