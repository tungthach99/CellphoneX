<?php
require("../../public/ketnoi.php");
$ho=$_POST["txtho"];
$ten=$_POST["txtten"];
$tendangnhap=$_POST["txttendangnhap"];
$matkhau=$_POST["txtmatkhau"];
$xacnhanmk=$_POST["txtxacnhanmk"];
//kiểm tra sự trùng lặp csdl
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["txttendangnhap"]."'";
$result=$con->query($sql);
if($result->num_rows>0) //tai khoan da ton tai
{
	header("location:../../home.php?login=2&error=1");
}
else
{
	$sql="insert into tbl_khach_hang(ten_dang_nhap,mat_khau,ho,ten_khach_hang) values('".$tendangnhap."','".$matkhau."','".$ho."','".$ten."')";
	//echo $sql;
	if($con->query($sql)===TRUE)
	{
		header("location:../../home.php?login=1");
	}
	else
	{
		echo "Không thêm được";
	}
}
?>