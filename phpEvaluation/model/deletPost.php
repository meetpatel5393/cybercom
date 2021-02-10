<?php 

	require 'connection.inc.php';
	$id = $_GET['id'];
	$obj = new DataBaseOperation();
	$query = "DELETE FROM `blog_post` WHERE id='$id'";
	$obj->deleteData($query);

	$query = "DELETE FROM `post_category` WHERE postId='$id'";
	$obj->deleteData($query);

?>