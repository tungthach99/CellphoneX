<?php
ob_start(); 
session_start();
?>
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
	include("layout/header.php");
	include("layout/taikhoan.php");
	require("public/ketnoi.php");
?>
	<?php
	if(isset($_GET["action"]) and $_GET["action"] == 'hoantat')
	{
	?>
	<div id="cheManHinh">
		<div id="thongBaoChinh">
			<h1>Thông báo!</h1>
			<p>Đổi mật khẩu thành công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
		</div>
	</div>
	<?php
	}
	?>
	<div class="batDau">
		<h2>Quên mật khẩu</h2>
		<?php 
    		if(isset($_GET["error"]))
    		{
      			if($_GET["error"]==2)
      			{
        			echo "<b>Tài khoản này không tồn tại!</b>";
      			}
    		}
		?>
		<form id="quenmatkhau" action="customer/Account/xlquenmatkhau.php" class="was-validated" method="post">
		<?php
		if(!isset($_GET["tendangnhap"]) and !isset($_GET["email"]) and !isset($_SESSION["datlaimatkhau"]))
		{
		?>
			<p>Mời bạn điền một số thông tin cơ bản theo biểu mẫu dưới đây để xác minh tài khoản:</p>
			<div class="from-group">
			<label>Tên đăng nhập của bạn:</label>
			<input type="text" class="form-control" placeholder="Tên đăng nhập" name="tendangnhap" required>
			</div>
		<?php
		}
		if(isset($_GET["tendangnhap"]) and !isset($_GET["email"]) and !isset($_SESSION["datlaimatkhau"]))
		{
		?>
			<div class="from-group">
			<label>Nhập email của bạn:</label>
			<input type="text" style="display: none;" name="tendangnhap" value="<?php echo $_GET["tendangnhap"]?>">
			<input type="text" class="form-control" placeholder="Nhập email của bạn" name="email" required>
			</div>
		<?php
		}
		?>
		<?php
		if(isset($_GET["email"]))
		{
		?>
			<div class="from-group">
			<label>Mã xác nhận đã được gửi đến email của bạn. Nhập mã xác nhận:</label>
			<input type="text" style="display: none;" name="tendangnhap" value="<?php echo $_GET["tendangnhap"]?>">
			<input type="text" style="display: none;" name="email" value="<?php echo $_GET["email"]?>">
			<input type="text" class="form-control" placeholder="Nhập mã xác nhận" name="maxacnhan" required>
			</div>
		<?php
		}
		
		?>
			<button style="<?php
						   if(isset($_SESSION["datlaimatkhau"])) echo "display:none"
						   ?>" form="quenmatkhau" type="submit" class="btn btn-primary">Tiếp theo</button>
		</form>
		<?php
			
		if(isset($_SESSION["datlaimatkhau"]) and $_SESSION["datlaimatkhau"]==1)
		{
		?>
			<form action="customer/Account/xldoimatkhau.php" method="post" class="was-validated" id="doimatkhau">
				<div class="from-group">
					<label>Nhập mật khẩu mới:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhaumoi" required>
					<input type="text" style="display: none" name="tendn" value="<?php echo $_GET["tendangnhap"]?>">
				</div>
				<button form="doimatkhau" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
			</form>
		<?php
		}
		?>
	</div>
			
	</div>
	
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>
