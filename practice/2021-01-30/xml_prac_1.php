<?php

	$name = 'rutvik';
	$sem = '8' ;
	$branch = 'civil';
	$xml = new DOMDocument("1.0");
 	$xml->formatOutput=true;

	$student_data = simplexml_load_file('demo1.xml');
	foreach ($student_data as $student) {
		if($student->name == $name) {
			echo 'Record already available in xml file.<br>';
			break;
		}
		else {
			//add new data into xml file 	
			$xml->load('demo1.xml', LIBXML_NOBLANKS);
	 		$students = $xml->documentElement;

		 	$student = $xml->createElement('student');//child element of students
		 	$students->appendChild($student);

		 	$name = $xml->createElement('name',$name);//child of student
		 	$student->appendChild($name);
		 	$branch = $xml->createElement('branch',$branch);//child of student
		 	$student->appendChild($branch);
		 	$sem = $xml->createElement('sem',$sem);//child of student
		 	$student->appendChild($sem);
		 	$xml->save('demo1.xml');
		 	echo 'Data inserted successfully';
		 	break;
		}
	}

?>