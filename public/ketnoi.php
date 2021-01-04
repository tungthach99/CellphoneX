<?php
	$con=new mysqli("localhost","root","","cellphonex");
	if($con->connect_error)
	{
		die("loi ket noi".$con->connect_error);
	}
	
?>