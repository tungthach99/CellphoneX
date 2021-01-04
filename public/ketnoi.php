<?php
	$con=new mysqli("localhost","root","","test");
	if($con->connect_error)
	{
		die("loi ket noi".$con->connect_error);
	}
	
?>