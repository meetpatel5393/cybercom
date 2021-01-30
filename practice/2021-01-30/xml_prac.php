<?php

	//write data into xml file.
	$xml = new DOMDocument("1.0");
 	$xml->formatOutput=true;

 	$students = $xml->createElement('students');//parent element
 	$xml->appendChild($students);
 	
 	$student = $xml->createElement('student');//child element of students
 	$students->appendChild($student);

 	$name = $xml->createElement('name','meet');//child of student
 	$student->appendChild($name);
 	$branch = $xml->createElement('branch','computer');//child of student
 	$student->appendChild($branch);
 	$sem = $xml->createElement('sem','7');//child of student
 	$student->appendChild($sem);

 	$xml->save('demo1.xml');//save record in xml file.

 	//check in xml file if data is available or not.
	$student_data = simplexml_load_file('demo1.xml');
	foreach ($student_data as $student) {
		if($student->name == 'krunal') {
			echo 'Record already available in xml file.';
		 }
		else {
			$student = $xml->createElement('student');//child element of students
		 	$students->appendChild($student);
		 	$name = $xml->createElement('name','krunal');//child of student
		 	$student->appendChild($name);
		 	$branch = $xml->createElement('branch','electrical');//child of student
		 	$student->appendChild($branch);
		 	$sem = $xml->createElement('sem','8');//child of student
		 	$student->appendChild($sem);
		 	$xml->save('demo1.xml');
		 	echo 'Student record inserted successfully';
		}
	}



	
	//read data from xml file and print.
	// $student_data = simplexml_load_file('demo.xml');
	// foreach($student_data as $student) {
	// 	echo "<b>Name</b>:".$student->name.'<br>';
	// 	echo "<b>Branch</b>:".$student->branch.'<br>';
	// 	echo "<b>Sem</b>:".$student->sem.'<br>';
	// 	echo "<b>Subject:</b><br>";
	// 	foreach ($student->subjects->subject as $subject) {
	// 		echo $subject.'<br>';	
	// 	}
	// 	echo '----------------<br>';
	// }

?>