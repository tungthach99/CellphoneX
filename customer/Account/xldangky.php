<?php
require("../../public/ketnoi.php");
$ho=$_POST["txtho"];
$ten=$_POST["txtten"];
$email=$_POST["txtemail"];
$matkhau=$_POST["txtmatkhau"];
$xacnhanmk=$_POST["txtxacnhanmk"];
//kiểm tra sự trùng lặp csdl
$sql="select * from tblnguoidung where tendangnhap='".$_POST["txtemail"]."'";
$result=$con->query($sql);
if($result->num_rows>0) //tai khoan da ton tai
{
	header("location:../../home.php?login=2&error=1");
}
else
{
	$sql="insert into tblnguoidung(tendangnhap,matkhau,ho,ten) values('".$email."','".$matkhau."','".$ho."','".$ten."')";
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