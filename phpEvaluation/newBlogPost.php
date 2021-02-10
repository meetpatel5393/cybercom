<?php 
	
	session_start();
	require 'model/addNewBlogPost.php';
	require 'header.inc.php';
	if(!isset($_SESSION['userId'])) {
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Blog Post</title>
</head>
<body>
	<center><h2>Add New Blog Post</h2></center>
	<?php if (isset($_POST['addPost'])) {
		echo $errMsg;
	} ?>
	<form action="newBlogPost.php" method="post" enctype='multipart/form-data'>
		Title <input type="text" name="title" required=""><br><br>
		Content <textarea name="content" required=""></textarea><br><br>
		Url <input type="text" name="url" readonly=""><br><br>
		Published At <input type="date" name="publishedDate" required=""><br><br>
		Category <select name="category[]" required="" multiple="">
					<option value="LifeStyle">LifeStyle</option>
					<option value="Health">Health</option>
					<option value="Education">Education</option>
					<option value="Music">Music</option>
					<option value="Car">Car</option>
				</select><br><br>
		Image <input type="file" name="image" accept=".jpg,.png,.jpeg"><br><br>
		<button type="submit" name="addPost">Submit</button>
	</form>
</body>
</html>