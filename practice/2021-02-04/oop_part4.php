<?php 

	/*
		Inheritance - single Inheritance.
	*/
	class person
	{
		public $name;
		private $age;
		protected $dob;

		function __construct($name,$age,$dob) {
			$this->name = $name;
			$this->age = $age;
			$this->dob = $dob;
		}

		public function show_detail() {
			$this->show();
			//$this->protected_function();
		}
		private function show() {
			echo $this->name.' '.$this->age.' '.$this->dob.'<br>';
		}
		protected function protected_function(){
			echo 'This is protected function of class PERSON<br>';
		}
	}

	$person1 = new person('meet',21,'29-08-2000');
	$person1->show_detail();


	class student extends person
	{
		public function show_detail1() {
			echo 'show method of student class<br>';
			$this->protected_function();
			$this->show_detail();
		}
	}

	$student1 = new student('krunal',25,'6-7-2000');
	$student1->name = 'raj';
	$student1->show_detail1();


	/*
		1) when child class have same named method as parent class so whenever child class object call that method first prioritie is given to the child class method and if child class not have same name method as parent class so child class object call method fo parent class which is inherit in child class.
				
		2) as per above discussion same concept applied in constructor.

		3) protected method of parent class we can directly access in child class.

	*/

?>