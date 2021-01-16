<?php
ob_start(); 
session_start();
?>
<?php
	$bl=3;
	require("public/ketnoi.php");
	$_SESSION["kiemtrasua"]=0;
	$noidung=$_POST['noi_dung'];
	$tenkhachhang=$_SESSION["userngan"];
	$idsanpham=$_POST['ma_san_pham'];
	$tranghientai="location:sanpham.php?product=1&masanpham=".$idsanpham;
	if ($noidung != "" && $tenkhachhang != "")
	{
		$sql_insert="insert into tbl_binh_luan_sp(ten_khach_hang,id_san_pham,noi_dung) values('".$tenkhachhang."','".$idsanpham."','".$noidung."')";
		if($con->query($sql_insert)===TRUE && $con->query($sql_insert1)===TRUE)
		{	
			header($tranghientai);
		}
		else
		{
			header($tranghientai);
		}   
	}
	else
	{
		if($tenkhachhang == "")
		{
			$_SESSION["kiemtrasua"]=1;
			header($tranghientai);
		}
		else
		{
		$_SESSION["kiemtrasua"]=2;
		header($tranghientai."&error=02");
		}
	}
?>