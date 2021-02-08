<?php 

	require 'connection.inc.php';
	
	$id = $_GET['id'];
	$obj = new DataBaseOperation();
	$query = "DELETE FROM `contactdetail` WHERE id='$id'";
	$obj->deleteData($query);

?>