<?php
	$host = "Localhost";
	$user = "root";
	$pass = "";
	$database = "cellphonex";
	$connection = new mysqli($host, $user, $pass, $database);
	mysqli_set_charset($connection,"UTF8");
?>