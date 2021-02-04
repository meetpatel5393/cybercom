<?php 

	/*
		class,method,properties,constructor.
	*/

	class car
	{
		// define variable/properties.
		public $name;
		public $color;
		public $company;

		//constructor of class which is call by default when object will create.
		function __construct($val = null){
			echo 'Object Created "'.$val.'"<br>';
		}

		//define function/methods.
		function set_value($name, $color, $company) {
			$this->name = $name;
			$this->color = $color;
			$this->company = $company;
		}
		function get_val(){
			return $this->name;
		}
		function magic_constance(){
			echo '__LINE__ to get the line number in which the constant is used. : '.__LINE__.'<br>';
			echo '__FILE__  to get the full path or the filename in which the constant is used. : '.__FILE__.'<br>';
			echo '__METHOD__ to get the name of the method in which the constant is used. : '.__METHOD__.'<br>';
		}
	}

	$car1 = new car('optional'); //create object of class.
	$car1->set_value('I20','black','hyundai'); //call method of class
	echo $car1->name.' '.$car1->color.' '.$car1->company.'<br>'; //get value to variable of class.
	$car1->name = 'I10'; //set value to variable.
	echo $car1->name.'<br>';
	echo $car1->get_val().'<br>';
	echo $car1->magic_constance();


	/*
	//scenario 2
	class student 
	{
		public $name;
		public $age;
		//In PHP we can define any constructor default/parametrized.
		function __construct($name,$age)
		{
			$this->name = $name;
			$this->age = $age;
		}
	}
	$student1 = new student('krunal',44);
	echo $student1->name.' age is -> '.$student1->age;
	*/


	/*
	//scenario 1
	class student 
	{
		public $name = 'meet';
	}
	$student1 = new student; // we don't need to specifie '()' in class name when there is no constructor 								define in class.
	echo $student1->name;
	*/

?>