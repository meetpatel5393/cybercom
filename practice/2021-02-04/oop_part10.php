<?php 

	/*
		Abstract class.

		1) Abstract function cannot contain body.
		2) An abstract class is a class that contains at least one abstract method. 
		3) An abstract method is a method that is declared, but not implemented in the code.
	*/
	abstract class Car {
		public $name;
		abstract function apply_color($color);
		abstract function choose_brand($brand);
		function method1(){
			echo 'This is non abstract function of abstract class<br>';
		}
	}

	class Car1 extends Car {
		public $color;
		public $brand;

		function apply_color ($color) {
			$this->color = $color;
			echo "$color color is applied to your car..<br>";
		}
		function choose_brand ($brand) {
			$this->brand = $brand;
			echo "$brand is choose as your car brand..<br>";
		}
		function set_name($name) {
			$this->name = $name;
			echo "name of your car is $name<br>";
		}
	}

	$Car1_Obj1 = new Car1();
	$Car1_Obj1->apply_color('Black');
	$Car1_Obj1->choose_brand('BMW');
	$Car1_Obj1->set_name('car1');
	$Car1_Obj1->method1();

?>