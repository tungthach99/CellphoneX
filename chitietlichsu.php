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
		$sql="SELECT tbl1.id_don_hang, tbl1.id_san_pham, tbl1.so_luong, tbl1.don_gia, tbl1.thanh_tien, tbl2.anh, tbl3.dung_luong, tbl2.ten_san_pham FROM tbl_chi_tiet_don_hang AS tbl1, tbl_san_pham AS tbl2, tbl_phien_ban AS tbl3 WHERE tbl1.id_san_pham=tbl2.id_san_pham AND tbl1.id_phien_ban=tbl3.id_phien_ban AND tbl1.id_don_hang='".$_GET["id"]."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
	?>
			<div class="container">
 				<h2>Lịch sử giao dịch</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background: url('images/background.jpg')">
								<th>Tên sản phẩm</th>
								<th>Ảnh</th>
								<th>Phiên bản</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>Thành tiền</th>
							</tr>
						</thead>
						<tbody>
							<tr>
			<?php
			while($row=$result->fetch_assoc())
			{
				if($row['so_luong']>0)
				{
			?>
								<td><?php echo $row['ten_san_pham']?></td>
								<td><img style="width: 25%;" src="images/san-pham/<?php echo $row['anh'] ?>"></td>
								<td><?php echo $row['dung_luong']?></td>
								<td><?php echo number_format($row['so_luong'])?></td>
								<td><?php echo number_format($row['don_gia']) ?></td>
								<td><b><?php echo number_format($row['thanh_tien'])?></b></td>
							</tr>
			<?php
				}
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
			<a href="lichsumuahang.php">&lsaquo;&lsaquo; Lịch sử mua hàng</a><br>
			<a href="home.php">&lsaquo;&lsaquo; Trang chủ</a>
		</span>
		<span class="col-2"></span>
	</div>
	
<?php
	include("layout/cacnut.php");
	include("layout/footer.php");
?>
	
</body>
</html>