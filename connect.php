<?php
$conn = pg_connect("host=192.168.146.140 port=5432  user=essai1 password=essai1 dbname=essai1");
	if (!$conn) {
		die("database connection failed" . pg_last_error($conn));
	}


?>
