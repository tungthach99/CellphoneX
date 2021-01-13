<?php
	session_start();
	if(isset($_SESSION["id-user"]))
	{
		session_destroy();
		header("location:../../home.php");
	}
?>