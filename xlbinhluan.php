<?php
ob_start(); 
session_start();
?>
<?php
	$bl=3;
	require("public/ketnoi.php");
	$_SESSION["kiemtrasua"]=0;
	$noidung=$_POST['noi_dung'];
	$idkhachhang=$_SESSION["id-user"];
	$idtintuc=$_POST['ma_tin_tuc'];
	$tranghientai="location:chitiettintuc.php?matintuc=".$idtintuc;
	if ($noidung != "" && $idkhachhang != 0)
	{
		$sql_insert="insert into tbl_binh_luan(id_khach_hang,id_tin_tuc,noi_dung) values('".$idkhachhang."','".$idtintuc."','".$noidung."')";
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
		if($idkhachhang == "")
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