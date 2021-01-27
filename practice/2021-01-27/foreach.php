<?php

	//foreach loop
	$subject = array(
		'sem1' => array(
			'subject1' => 'Math',
			'subject2' => 'Physics',
			'subject3' => 'Calculas'
		),
		'sem2' => array(
			'subject1' => 'ADA',
			'subject2' => 'CS',
			'subject3' => 'DMBI',
			'subject4' => 'JAVA',
			'JAVA' => array(
				'chapter1' => 'introduction',
				'chapter2' => 'function',
				'chapter3' => 'variable and data types'
			)
		)
	);

	foreach ($subject as $sem => $sub_name) {
		echo $sem.'<br>';
		foreach ($sub_name as $key => $value) {
			echo $key.' => '.$value.'<br>';
		}
	}


	$array = array(1,2,'3',3.5,'a','b');
	foreach ($array as $key => $value) {
		echo $key.' => '.$value.'<br>';
	}

?>