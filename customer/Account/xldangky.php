<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$hoten=$_POST["txthoten"];
$tendangnhap=$_POST["txttendangnhap"];
$matkhau=$_POST["txtmatkhau"];
$xacnhanmk=$_POST["txtxacnhanmk"];
//kiểm tra sự trùng lặp csdl
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["txttendangnhap"]."'";
$result=$con->query($sql);
if($result->num_rows>0) //tai khoan da ton tai
{
	header("location:../../home.php?loi=2");
}
else
{
	$sql="insert into tbl_khach_hang(ten_dang_nhap,mat_khau,ten_khach_hang) values('".$tendangnhap."','".$matkhau."','".$hoten."')";
	//echo $sql;
	if($con->query($sql)==TRUE)
	{
		header("location:../../home.php?login=1");
	}
	else
	{
		echo "Không thêm được";
	}
}
?>