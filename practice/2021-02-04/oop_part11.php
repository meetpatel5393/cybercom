<?php

	/*
		Interface.

		1) Interfaces may not include member variables.
		2) The classes that implement the interfaces must define all the methods that they inherit from the interfaces.
		3) All the methods in the interface must be in the public visibility scope.

	*/
	interface Person {
		public function set_detail($name,$branch);
		function show_Detail();
	}
	interface Human {
		public function show_humanity();
		function show_Detail();
	}

	class Student implements Person {
		public $name;
		public $branch;
		function set_detail($name,$branch) {
			$this->name = $name;
			$this->branch = $branch;
		}
		function show_detail() {
			echo $this->name.' '.$this->branch; 
		}
	}
	$student = new Student();
	$student->set_detail('meet','computer');
	$student->show_detail();


	class Doctor implements Person , Human {
		public $name;
		public $branch;
		function set_detail($name,$branch) {
			$this->name = $name;
			$this->branch = $branch;
		}
		function show_detail() {
			echo $this->name.' '.$this->branch; 
		}
		public function show_humanity() {
			echo 'OK';
		}
	}

?>