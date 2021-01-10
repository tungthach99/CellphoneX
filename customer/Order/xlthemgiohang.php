<?php
	session_start();
	if(!isset($_SESSION["giohang"])) $_SESSION["giohang"] = array(0=>"0");
	if(!isset($_SESSION["soluong"])) $_SESSION["soluong"] = array(0=>"0");
	if(isset($_SESSION["stt_gio_hang"]))
	{
		$_SESSION["stt_gio_hang"]++;
	}
	else $_SESSION["stt_gio_hang"]=1;
	require("../../public/ketnoi.php");
	$_SESSION["giohang"][$_SESSION["stt_gio_hang"]]=$_GET["masanpham"];
	$_SESSION["soluong"][$_SESSION["stt_gio_hang"]]=$_GET["soluong"];
foreach($_SESSION["soluong"] as $key=>$value)
	echo $value." ";	
	header("location:../../giohang.php?&action=them");
?>