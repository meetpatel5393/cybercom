<?php 

	require 'connection.inc.php';
	session_start();
	if(isset($_GET['id']) && isset($_SESSION['userId'])) {
		$postId = $_GET['id'];
		$userId = $_SESSION['userId'];	

		$obj = new DataBaseOperation();
		$sql = "SELECT * FROM `blog_post` WHERE id='$postId'";
		$result = $obj->selectData($sql);
		foreach ($result as $value) {
			$title = $value['title'];
			$content = $value['content'];
		}
	}
	if(isset($_POST['updateBlog'])) {
		$obj = new DataBaseOperation();
		$postId = $_POST['id'];
		$title = trim($_POST['title']);
		$content = trim($_POST['content']);
		$publishedAt = $_POST['publishedDate'];
		$updatedAt = date("Y-m-d h:i:sa");

		$sql = "UPDATE `blog_post` SET `title`='$title',`content`='$content',`publishedAt`='$publishedAt',`updatedAt`='$updatedAt' WHERE id='$postId'";
		$obj->updateData($sql);

		$sql = "DELETE FROM `post_category` WHERE postId='$postId'";
		echo $obj->deleteData($sql);

		foreach ($_POST['category'] as $value) {
			$sql = "INSERT INTO `post_category`(`postId`, `categoryId`) VALUES ('$postId','$value')";
			$obj->insertData($sql);
		}
		header('Location:blogPost.php');
	}

?>