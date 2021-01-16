<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["tendangnhap"]."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	$dieuhuong="location:../../quenmatkhau.php?&tendangnhap=";
	$row=$result->fetch_assoc();
	$dieuhuong.=$row["ten_dang_nhap"];
	if(!isset($_POST["email"])) header($dieuhuong);
	else
	{
		if($_POST["email"]==$row["email"])
		{
			$dieuhuong.="&email=".$row["email"];
			header($dieuhuong);
			die();
		}
		else
		{
			header("location:../../quenmatkhau.php?&error=2");
			die();
		}
		if($_POST["maxacnhan"]==$row["maxacnhan"])
		{
			
		}
	}
}
else //khong ton tai tai khoan
{
	header("location:../../quenmatkhau.php?&error=2");
}
	
?>