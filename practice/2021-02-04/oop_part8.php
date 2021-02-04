<?php 

	/*
		create Namespace practice.
	*/
	namespace functions;
	class math_fun {
		function sum($a,$b)	{
			return $a+$b;
		}
		function div($a,$b) {
			if($b==0) {
				return 'Can not divide by Zero';
			} else {
				return $a/$b;
			}
		}
		function sub($a,$b) {
			return $a-$b;
		}
		function mul($a,$b) {
			return $a*$b;
		}		
	}
	class print_fun {
		function show_data($a) {
			return '------> '.$a.' <------';
		}
	}

?>