<?php
	$con=new mysqli("localhost","root","","cellphonex");
	mysqli_set_charset($con, 'UTF8');
	if($con->connect_error)
	{
		die("loi ket noi".$con->connect_error);
	}
	
?>