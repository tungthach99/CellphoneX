<?php
	session_start();
	$_SESSION["soluong"][$_GET["stt"]]++;
	header("location:../../giohang.php?&action=sua");
?>