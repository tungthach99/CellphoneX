<script>alert('Hello');</script>
<?php
require("../../public/ketnoi.php");
$sql="select * from tblnguoidung where tendangnhap='".$_POST["txttendangnhap"]."' and matkhau='".$_POST["txtmatkhau"]."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
//$row=$result->fetch_assoc();
//echo "Thanh cong";
		//khoi tao phien lam viec
		session_start();
		$_SESSION["user"]=$_POST["txttendangnhap"];
		$_SESSION["userngan"]=substr($_SESSION["user"],0,5);
		header("location:../../home.php");
		

}
else //khong ton tai tai khoan
{
	header("location:../../home.php?&error=2");
}
	
?>