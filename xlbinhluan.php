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
	$idtintuc=$_POST['ma_tin_tuc'];
	$tranghientai="location:chitiettintuc.php?matintuc=".$idtintuc;
	if ($noidung != "" && $tenkhachhang != "")
	{
		$sql_insert="insert into tbl_binh_luan(ten_khach_hang,id_tin_tuc,noi_dung) values('".$tenkhachhang."','".$idtintuc."','".$noidung."')";
		if($con->query($sql_insert)===TRUE && $con->query($sql_insert1)===TRUE)
		{	
			header($tranghientai);
		}
		else
		{
			header($tranghientai."&error=01");
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