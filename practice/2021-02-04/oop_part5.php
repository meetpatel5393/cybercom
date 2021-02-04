<?php 

	/*
		Inheritance - Multilevel Inheritance.
	*/

	class classA {
		public $classA_var1;
		function __construct($classA_var1) {
			$this->classA_var1 = $classA_var1;
			echo 'constructor of classA called<br>';
		}
		public function classA_method1(){
			echo 'method of classA is called : value of classA will print<br>';
			echo $this->classA_var1.'<br>';
		}
	}
	$classA_obj1 = new classA('classA variable value');
	$classA_obj1->classA_method1();
	echo '-------------------------------<br>';

	class classB extends classA {
		public $classB_var1;
		function __construct($classB_var1) {
			$this->classB_var1 = $classB_var1;
			echo 'constructor of classB called<br>';
		}
		public function classA_method1(){
			echo 'method of classB is called : value of classB will print<br>';
			echo $this->classB_var1.'<br>';
		}
	}
	$classB_obj1 = new classB('classB variable value');
	//$classB_obj1->classB_method1();
	echo '-------------------------------<br>';

	//$classA_obj1->classB_method1();//this will give error bcoz we can't access method of child class using parent class object.

	//$classB_obj1->classA_method1();//this will work but the value of classA variable not print bcoz we access classA method using child class object.

	class classC extends classB {
		public $classC_var1;
	}

	$classC_obj1 = new classC('aa');//this will access classB constructor if classB don't have constructor then after it will access constructor of classA.
	$classC_obj1->classA_method1();// this will work same as a constructor.


?>