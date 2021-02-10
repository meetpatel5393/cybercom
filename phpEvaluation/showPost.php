<?php 
	session_start();
	if(!isset($_SESSION['userId'])) {
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<?php 
		require 'model/connection.inc.php';	
		if(isset($_POST['showPost'])) {
			$postId = $_POST['postid'];
			$userId = $_SESSION['userId'];

			$obj = new DataBaseOperation();
			$sql = "SELECT * FROM `post_category` WHERE postId='$postId'";
			$categoryName = $obj->selectData($sql);
			$categoryNameList ='';
			foreach ($categoryName as $value1) {
				$categoryNameList.= $value1['categoryId'].', ';
			}

			$sql = "SELECT * FROM `blog_post` WHERE id='$postId'";
			$result = $obj->selectData($sql);
			foreach ($result as $value) {
				echo "
					<h2>Title : $value[title]</h2>
					<p>Published At : $value[publishedAt]</p>
					<p>Category : $categoryNameList</p>
					<p>Content : $value[content]</p>
				";
			}
		}
	?>
</body>
</html>