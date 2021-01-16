<?php
ob_start(); 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Giỏ hàng</title>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/20.png">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<script>
jQuery.noConflict();
(function( $ ) {
		jQuery(document).ready(function($){
	if($("#veDauTrang").length > 0){
		$(window).scroll(function () {
			var e = $(window).scrollTop();
			var f = e;
			if (e > 100) {
				$("#veDauTrang").show();
			} else {
				$("#veDauTrang").hide()
			}
			if (e > 300) {
				
			}
		});
		$("#veDauTrang").click(function () {
			$('body,html').animate({
				scrollTop: 0
			})
		})
	}
});
})( jQuery );
</script>
</head>
<body>
<?php
	include("layout/header.php");
	include("layout/taikhoan.php");
	require("public/ketnoi.php");
?>
	<div class="row" style="width: 100%;">
		<span onClick="dongform('formGioHang')" class="col-2"></span>
		<span class="col-8">
	<?php
	if (isset($_SESSION["id-user"]))
	{
		$sql="select * from tbl_don_hang where id_khach_hang='".$_SESSION["id-user"]."' order by id_don_hang asc";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
	?>
			<div class="container">
 				<h2>Lịch sử mua hàng</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background: url('images/background.jpg')">
								<th>Ngày đặt</th>
								<th>Địa chỉ nhận hàng</th>
								<th>Mã giảm giá</th>
								<th>Hình thức</th>
								<th>Ghi chú</th>
								<th>Phí vận chuyển</th>
								<th>Tổng tiền</th>
								<th>Trạng thái</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
			<?php
			while($row=$result->fetch_assoc())
			{
			?>
								<td><?php echo $row['ngay_dat']?></td>
								<td><?php echo $row['dia_chi_nhan_hang']?></td>
								<td><?php echo $row['ma_giam_gia']?></td>
								<td><?php echo $row['hinh_thuc_mua_hang']; ?></td>
								<td><?php echo $row['ghi_chu']?></td>
								<td><?php echo number_format($row['phi_van_chuyen'])?></td>
								<td><b><?php echo number_format($row['tong_tien'])?></b></td>
								<td><?php
				if($row['trang_thai']==0) echo "Chưa thanh toán";
				if($row['trang_thai']==1) echo "Đã thanh toán";
									?>
								</td>
								<td><a href="chitietlichsu.php?&id=<?php echo $row['id_don_hang']?>"><b>Chi tiết</b></a></td>
							</tr>
			<?php
			}
			?>
						</tbody>
					</table>
				</div>
			</div>
		<?php
		}
		else echo "<p style='margin-top: 60px;'>Lịch sử mua hàng sẽ ghi lại những giao dịch của bạn tại đây.<p>";
	}
	else echo "<p>Lịch sử mua hàng sẽ ghi lại những giao dịch của bạn tại đây.<p>";
		?>
			<a href="home.php">&lsaquo; Trang chủ</a>
		</span>
		<span class="col-2"></span>
	</div>
	
<?php
	include("layout/cacnut.php");
	include("layout/footer.php");
?>
	
</body>
</html>