<?php

	//include_once and require_once practice.
	include 'header.php';
	include_once 'header.php';//include_once check that if the file is include or not , it prevent include file for multiple time.

	require 'header1.php';
	require_once 'header1.php';//require_once check that if the file is include or not , it prevent include file for multiple time.

?>