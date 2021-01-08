<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Giỏ hàng</title>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/20.png">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!--	<link type="text/css" rel="stylesheet" href="css/style.css">-->
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
	session_start();
	include("layout/header.php");
	include("layout/taikhoan.php");
	include("layout/giohang.php");
	require("public/ketnoi.php");
?>

	<div class="row" style="width: 100%;">
		<span class="col-2"></span>
		<span class="col-8">
			<div class="container">
 				<h2>Chi tiết giỏ hàng</h2>  
				<div class="table-responsive">
   					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Tên sản phẩm</th>
								<th>Ảnh</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>Số lượng tồn kho</th>
								<th>Thành tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($_SESSION["id_san_pham"])){
							?>
								<tr>
									<td><?php echo $_SESSION["id_san_pham"]; ?></td>
									<td style="display: none;"><?php echo $_SESSION["id_san_pham"]; ?></td>
									<td><?php echo $_SESSION["ten_sp"] ?></td>
									<td><img style="width: 20%;" src="images/san-pham/<?php echo $_SESSION["anh"]; ?>"></td>
									<td></td>
									<td><?php echo $_SESSION["don_gia"]; ?></td>
									<td><?php echo $_SESSION["sl_ton"]; ?></td>
									<td></td>
									<td><a class="fa fa-trash"></a></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</span>
	</div>
	
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>