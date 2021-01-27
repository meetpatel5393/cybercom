<?php

	//array practice.

	//simple array.
	$fruit = array('apple','orange','banana');
	print_r($fruit);
	echo '<br>'.$fruit[0].'<br>';

	//associative array.
	$array = array(
		'key1' => 'value1',
		'key2' => 'value2',
		'key3' => 'value3',
		'key4' => 1,
		'key5' => 2
	);
	var_dump($array);
	echo '<br>'.$array['key3'].'<br>';

	$array = array(
	         "a",
	         "b",
	    6 => "c",
	         "d",
	);
	var_dump($array);
	echo "<br>";

	//multidimensional array.
	$array = array(
		'key1' => 'value1',
		'key2' => 'value2',
		'key3' => array(
			'key31' => 'value31',
			'key32' => 'value32',
			'key33' => 'value33'
		),
		'key4' => 'value4',
		'key5' => 'value5'
	);
	print_r($array);
	echo "<br>";
	echo $array['key3']['key32'].'<br>';
?>