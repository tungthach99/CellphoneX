<script>alert('Hello');</script>
<?php
require("../../public/ketnoi.php");
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["txttendangnhap"]."' and mat_khau='".$_POST["txtmatkhau"]."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows>0)
{
//$row=$result->fetch_assoc();
//echo "Thanh cong";
		//khoi tao phien lam viec
		session_start();
		$_SESSION["id-user"]=$row["id_khach_hang"];
		$_SESSION["ten-user"]=$row["ten_khach_hang"];
		$_SESSION["userngan"]=substr($_POST["txttendangnhap"],0,4);
		header("location:../../home.php");
		

}
else //khong ton tai tai khoan
{
	header("location:../../home.php?&error=2");
}
	
?>