<h2>Join Operation</h2>
<?php

	//left join
	$sql = "SELECT customer_name , order_date ,city FROM orders LEFT JOIN customer ON customer.customer_id = orders.customer_id";

	$sql = "SELECT *FROM orders LEFT JOIN customer ON customer.customer_id = orders.customer_id order by customer.customer_id";

	$sql = "SELECT *FROM orders LEFT JOIN customer ON customer.customer_id = orders.customer_id";

	$sql = "SELECT *FROM customer LEFT JOIN orders ON customer.customer_id = orders.customer_id";

	$sql = "SELECT customer.customer_name ,orders.order_id,orders.order_date FROM customer RIGHT JOIN orders ON customer.customer_id = orders.customer_id";

	//JOIN
	$sql = "SELECT * FROM customer JOIN orders ON customer.customer_id=orders.customer_id";

?>