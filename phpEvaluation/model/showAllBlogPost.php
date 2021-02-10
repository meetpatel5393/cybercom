<?php 
	
	session_start();
	require 'connection.inc.php';

	$obj = new DataBaseOperation();
	if(isset($_SESSION['userId'])) {
		$res = '';
		$userid = $_SESSION['userId'];
		$sql = "SELECT * FROM `blog_post` WHERE userId='$userid'";
		$result = $obj->selectData($sql);
		foreach ($result as $value) {
			$sql = "SELECT * FROM `post_category` WHERE postId='$value[id]'";
			$categoryName = $obj->selectData($sql);
			$categoryNameList ='';
			foreach ($categoryName as $value1) {
				$categoryNameList.= $value1['categoryId'].', ';
			}
			$res.="
				<tr>
					<td>
						<form method='POST' class='p-0 m-0' action='./showPost.php'>
							<input type='text' name='postid' value='$value[id]' hidden>
							<button type='submit' name='showPost' class='btn'>$value[id]</button>
						</form>
					</td>
					<td>$categoryNameList</td>
					<td>$value[title]</td>
					<td>$value[publishedAt]</td>
					<td>
					<a class='btn bg-danger text-white float-right' 
					id='$value[id]' onclick='deletePost(this.id)'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
					<form method='GET' class='p-0 m-0' action='updateBlogPost.php'>
						<input type='text' name='id' value='$value[id]' hidden>
						<button type='submit' class='btn bg-primary text-white float-right mr-2'><i class='fa fa-pencil' aria-hidden='true'></i></button>
					</form>
					</td>
				<tr>
			";
		}
	}

?>