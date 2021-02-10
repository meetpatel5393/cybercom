<?php
	require 'model/showAllBlogPost.php';
	require 'header.inc.php';
	if(!isset($_SESSION['userId'])) {
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Post</title>
</head>
<style type="text/css">
	table,td {
		border:1px solid black;
		border-spacing: 0px;

	} th{
		background: orange;
	}
</style>
<body>
	<h2>Blog Post</h2>
	<button><a href="newBlogPost.php">Add Blog Post</a></button>
	<button class="float-right"><a href="#">Manage Caregory</a></button>
	<button class="float-right mr-3"><a href="model/logoutUser.php">LogOut</a></button>
	<div>
		<table id="myTable" class="table display m-0 p-0">
			<thead>
			<tr>
				<th>Post Id</th>
				<th>Category Name</th>
				<th>Title</th>
				<th>Published Date</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
				<?php echo $res; ?>
			</tbody>
		</table>
	</div>
	<footer>
		<script type="text/javascript" src="js/All.js"></script>
	</footer>
</body>
</html>