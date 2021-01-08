<?php
	session_start();
	require("../../public/ketnoi.php");
	if(!isset($_SESSION["stt"]))
	{
		$_SESSION["stt"]=0;
	}
	$sql="select * from tbl_san_pham where id_san_pham=".$_GET["masanpham"];
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if(isset($_SESSION["stt"])) $_SESSION["stt"]++;
			$_SESSION["id_san_pham"]=$row['id_san_pham'];
			$_SESSION["ten_sp"]=$row['ten_san_pham'];
			$_SESSION["don_gia"]=$row['don_gia'];
			$_SESSION["anh"]=$row['anh'];
			$_SESSION["sl_ton"]=$row['so_luong'];
		}
	}
	header("location:../../giohang.php?&action=them");
?>