<?php

	/*
	LIKE 'a%'	Finds any values that start with "a"
	LIKE '%a'	Finds any values that end with "a"
	LIKE '%or%'	Finds any values that have "or" in any position
	LIKE '_r%'	Finds any values that have "r" in the second position
	LIKE 'a_%'	Finds any values that start with "a" and are at least 2 characters in length
	LIKE 'a__%'	Finds any values that start with "a" and are at least 3 characters in length
	LIKE 'a%o'	Finds any values that start with "a" and ends with "o"
	*/

	$sql = "select customer_name from customer where customer_name like 'm%'";
	$sql = "select customer_name from customer where customer_name like '%t'";

?>