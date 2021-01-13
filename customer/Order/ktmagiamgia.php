<?php
	session_start();
	require("../../public/ketnoi.php");
	if(isset($_SESSION["magiamgia"]) and $_SESSION["magiamgia"]==$_GET["magiamgia"])
	{
		$_SESSION["magiamgia"] = null;
		$_SESSION["chietkhau"] = 0;
		header("location:../../giohang.php?&action=check");
	}
	else
	{
		$sql= "select * from tbl_ma_giam_gia where tinh_trang=0 and ma_giam_gia = '".$_GET["magiamgia"]."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$_SESSION["magiamgia"]=$row['ma_giam_gia'];
				$_SESSION["chietkhau"]=$row['chiet_khau'];
			}
		}
		else $_SESSION["chietkhau"]=0;
		header("location:../../giohang.php?&action=check");
	}
?>