<?php
	session_start();
	$_SESSION["soluong"][$_GET["stt"]]=0;
	header("location:../../giohang.php?&action=sua");
?>