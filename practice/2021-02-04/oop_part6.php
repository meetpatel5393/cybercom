<?php 

	/*
		Final keyword 
		use of final keyword is to prevent inherit of class and override a method.
	*/

	/*final class classA
	{
		public $classA_var1 = 'meet';
	}
	class classB extends classA { // this give error bcoz we can't inherit classA bcoz of final keyword.
		public $classB_var1 = 'kapadiya';
	}*/

	class classC
	{
		final public function classC_method(){
			echo 'classC method';
		}
	}
	class classD extends classC {
		public function classC_method(){ //this will give fatal error : Cannot override final method.

		}
	}

?>