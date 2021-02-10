<?php require 'model/getDataForUpdateBlogPost.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<center><h2>Upadte Blog Post</h2></center>
	<form action="updateBlogPost.php" method="post" enctype='multipart/form-data'>
		<input type="text" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>" hidden="">
		Title <input type="text" name="title" required="" value="<?php if(isset($_GET['id'])){echo $title;} ?>"><br><br>
		Content <textarea name="content" required=""><?php if(isset($_GET['id'])){echo $content;} ?></textarea><br><br>
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
		<button type="submit" name="updateBlog">Update</button>
	</form>
</body>
</html>