<?php
	session_start();
	require("../../public/ketnoi.php");
	$idkhachhang=-1;
	$tongtien=$_SESSION["tongtien"];
	$trangthai='dat hang';
	$tenkhachhang = $_POST["hoten"];
	$diachi = $_POST["diaChiNhanHang"];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$ngaydat = date('m/d/Y h:i:s a', time());
	if ($_POST["hinhthuc"]=="option3")
	$hinhthuc = "COD";
	$sql="insert into tbl_don_hang(id_khach_hang,tong_tien,trang_thai,ngay_dat,ten_khach_hang,dia_chi_nhan_hang,hinh_thuc_mua_hang, ghi_chu) values('".$idkhachhang."',".$tongtien.",'".$trangthai."','".$ngaydat."','".$tenkhachhang."','".$diachi."','".$hinhthuc."','".$_POST["ghichu"]."')";
	//echo $sql;
	if($con->query($sql)==TRUE)
	{
		$sqlselect ="select id_don_hang from tbl_don_hang where ngay_dat = '".$ngaydat."' and id_khach_hang = '".$idkhachhang."' and ten_khach_hang = '".$tenkhachhang."' and dia_chi_nhan_hang = '".$diachi."'";
		$result2=$con->query($sqlselect);
		if($result2->num_rows>0)
		{
			while($row2=$result2->fetch_assoc())
			{
				$_SESSION["id_don_hang"] = $row2['id_don_hang'];
			}
		}
		if(isset($_SESSION["giohang"]))
		{
			foreach($_SESSION["giohang"] as $key=>$value)
			{
				$sql3="select * from tbl_san_pham where id_san_pham=".$value;
				$result3=$con->query($sql3);
				if($result3->num_rows>0)
				{
					while($row3=$result3->fetch_assoc())
					{
						$thanhtien3=$_SESSION["soluong"][$key]*$row3['don_gia'];
						$sqlinsert = "insert into tbl_chi_tiet_don_hang(id_don_hang,id_san_pham,don_gia,so_luong,thanh_tien) values('".$_SESSION["id_don_hang"]."','".$row3['id_san_pham']."','".$row3['don_gia']."',".$_SESSION["soluong"][$key].",'".$thanhtien3."')";
						if ($con->query($sqlinsert)) {
							
						}
						else echo "không thêm được: ".$sqlinsert;
					}
				}
			}
		}
		header("location:../../giohang.php?&action=hoantat");
	}
	else
	{
		echo "Không thêm được ";
		echo $sql;
	}
?>