<?php 

	/*
		public,private,protected,distructor.
	*/

	class student
	{
		public $name;
		private $age;
		protected $branch;
		function __construct($name,$age,$branch)
		{
			$this->name = $name;
			$this->age = $age;
			$this->branch = $branch;
		}
		private function get_private_data(){
			return $this->age;
		}
		function get_private_protected_propertie(){ // by default it's public
			//return $this->age;
			echo $this->get_private_data();
			return $this->branch;
		}
		function __destruct() {
			echo 'Object will be destroy..';
		}
	}

	$student1 = new student('meet',21,'computer');
	echo $student1->name.' ';
	//echo $student1->age; //private propertie we can't access outside class directly, but we can access via functions as per given above.
	//echo $student1->branch; //same as private we can't access protected properties outside class directly , but we can access via function as per above.
	echo $student1->get_private_protected_propertie().' ';
	//echo $student1->get_private_data();//same as properties we can't access private method directly.

?>