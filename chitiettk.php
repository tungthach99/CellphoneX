<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Chính sách sử dụng</title>
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
	<link rel="stylesheet" type="text/javascript" href="bootstrap/js/bootstrap.min.js">
</head>
<body>
<?php
	session_start();
	include("layout/header.php");
	include("layout/taikhoan.php");
	include("layout/giohang.php");
	require("public/ketnoi.php");
?>
	<div class="batDau">
		<h2>Đăng ký tài khoản</h2>
		<p>Mời bạn điền một số thông tin cơ bản theo biểu mẫu dưới đây để đăng ký tài khoản:</p>
		<?php 
    		if(isset($_GET["error"]))
    		{
      			if($_GET["error"]==1)
      			{
        			echo "Tài khoản này đã tồn tại!";
      			}
    		}
		?>
		<form action="customer/Account/xldangky.php" class="was-validated" method="post">
			<div class="form-group row">
				<span class="col-6">
					<label>Họ:</label>
					<input type="text" class="form-control" id="txtho" name="txtho" required>
<!--
					<div class="valid-feedback">Hợp lệ.</div>
					<div class="invalid-feedback">Vui lòng nhập thông tin trên!</div>
-->
				</span>
				<span class="col-2"></span>
				<span class="col-4">
					<label>Tên:</label>
					<input type="text" class="form-control" id="txtten" name="txtten" required>
<!--
					<div class="valid-feedback">Hợp lệ.</div>
					<div class="invalid-feedback">Vui lòng nhập thông tin trên!</div>
-->
				</span>
			</div>
			<div class="from-group">
				<label>Tên đăng nhập của bạn:</label>
				<input type="text" class="form-control" id="txttendangnhap" placeholder="Nhập email của bạn" name="txttendangnhap" required>
<!--
				<div class="valid-feedback">Hợp lệ.</div>
				<div class="invalid-feedback">Vui lòng nhập thông tin trên!</div>
-->
			</div>
			<div class="from-group">
				<label>Mật khẩu:</label>
				<input type="password" class="form-control" id="txtmatkhau" placeholder="Nhập tên đăng nhập" name="txtmatkhau" required>
<!--
				<div class="valid-feedback">Hợp lệ.</div>
				<div class="invalid-feedback">Vui lòng nhập thông tin trên!</div>
-->
			</div>
			<div class="from-group">
				<label>Xác nhận mật khẩu:</label>
				<input type="password" class="form-control" id="txtxacnhanmk" placeholder="Nhập email của bạn" name="txtxacnhanmk" required>
<!--
				<div class="valid-feedback">Hợp lệ.</div>
				<div class="invalid-feedback">Vui lòng nhập thông tin trên!</div>
-->
			</div>
			<div class="form-group form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox" id="txtdongydk" name="txtdongydk" required> Tôi đã đọc và đồng ý với <a><b>điều khoản sử dụng</b></a> của CellphoneX.
				<div class="valid-feedback">Đồng ý.</div>
				<div class="invalid-feedback">Chấp nhận điều khoản sử dụng để tiếp tục.</div>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Đăng ký</button>
		</form>
	</div>
	
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>
