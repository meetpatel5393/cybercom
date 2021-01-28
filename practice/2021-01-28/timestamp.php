<?php

	date_default_timezone_set("Asia/Calcutta");
	//echo date('h:i:s');
	//d = date
	//D = dayname
	//M = month name
	//m = month number
	//Y = whole year number (eg.2021)
	//y = last two number of year (eg.21)
	//i = minute
	//h = hour
	//s = second
	//a = am/pm
	//A = AM/PM
	echo date('d-m-Y @ h:i:s a' , strtotime('+ 1 year'));
	// + n week = add n week
	// + n day = add n day
	// + n year = add n year
	// + n hour = add n hour
	// + n minute = add n minute
	// + n second = add n second

?>