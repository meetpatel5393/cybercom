<?php 
	
	require 'connection.inc.php';

	if(isset($_POST['addPost'])) {
		$title = trim($_POST['title']);
		$content = trim($_POST['content']);
		$userid = $_SESSION['userId'];
		$publishedAt = $_POST['publishedDate'];

		$errMsg= '';

		if(
			empty($title)
			|| empty($content)
		) {
			$errMsg = 'Please fill all the field';
		} else {
			$obj = new DataBaseOperation();
			$sql = "INSERT INTO `blog_post`(`userId`, `title`, `content`, `publishedAt`) 
			VALUES ('$userid','$title','$content','$publishedAt')";
			$id = $obj->insertData($sql);

			foreach ($_POST['category'] as $value) {
				$sql = "INSERT INTO `post_category`(`postId`, `categoryId`) VALUES ('$id','$value')";
				$obj->insertData($sql);
			}
			header("Location:./blogPost.php");
		}
	}


?>