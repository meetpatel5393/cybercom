<?php 
	require 'header.inc.php';
	require 'model/getContactList.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
</script>
<body>
	<div class="container-fluid m-0 p-0 pl-4 pr-4 col-md-12">
		<div class="container-fluid m-0 p-0 pt-3 pb-3 border-bottom row">
			<h2>Read Contact</h2>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row">
			<form method='post' action="create.php"><button type="submit" class="btn bg-success text-white" name="createContactPageLink">Create Contact</button></form>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row table-responsive">
			<center><h5><?php if(isset($_GET['successMsg'])){echo $_GET['successMsg'];} ?></h5></center>
			<table id="myTable" class="table display m-0 p-0">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Title</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
					<?php echo $res; ?>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
		<script type="text/javascript" src="js/All.js"></script>
	</footer>
</body>
</html>