<?php 

	//querie for create table.
	$sql = "CREATE TABLE student (
		student_id int,
		student_name VARCHAR(255),
		student_branch VARCHAR(255),
		student_city VARCHAR(200)
	)";

	//delete table
	$sql="DROP TABLE student";

	//create table fro existing tables
	$sql = "
		CREATE TABLE sell  AS SELECT customer.customer_id , customer.customer_name , orders.order_id,orders.order_date 
		FROM customer , orders 
		WHERE customer.customer_id=orders.customer_id;
	";
?>