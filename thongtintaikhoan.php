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
			<p>Thành công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
		</div>
	</div>
	<?php
	}
	?>
	<?php
	if(isset($_GET["action"]) and $_GET["action"] == 'fail')
	{
	?>
	<div id="cheManHinh">
		<div id="thongBaoChinh">
			<h1>Thông báo!</h1>
			<p>Không thành  công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
		</div>
	</div>
	<?php
	}
	?>
	<div class="batDau">
		<h2>Thông tin tài khoản</h2>
		<?php
		if(isset($_GET["thaotac"]) and $_GET["thaotac"] == 'doi')
		{
		?>
			<form action="customer/Account/xlsuamatkhau.php" method="post" class="was-validated" id="doimatkhau">
				<div class="from-group">
					<label>Mật khẩu hiện tại:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhau" required>
				</div>
				<div class="from-group">
					<label>Nhập mật khẩu mới:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhaumoi" required>
				</div>
				<div class="from-group">
					<label>Xác nhận mật khẩu mới:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="xnmatkhaumoi" required>
				</div>
				<button form="doimatkhau" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
			</form>
		<?php
		}
		?>
		<?php
		$sql="select * from tbl_khach_hang where id_khach_hang='".$_SESSION["id-user"]."'";
		$result=$con->query($sql);
		$row=$result->fetch_assoc();
		if(!isset($_GET["thaotac"]))
		{
			?>
			<form class="was-validated" action="customer/Account/xldoithongtin.php" method="post">
				<div class="from-group">
					<label>Tên khách hàng:</label>
					<input type="text" class="form-control" value="<?php echo $row["ten_khach_hang"]?>" readonly>
				</div>
				<div class="from-group">
					<label>Email:</label>
					<input type="text" class="form-control" readonly value="<?php echo $row["email"]?>">
				</div>
				<div class="from-group">
					<label>Số điện thoại:</label>
					<input type="text" class="form-control" readonly value="<?php echo $row["so_dien_thoai"]?>">
				</div>
				<div class="from-group">
					<label>Địa chỉ</label>
					<input required type="text" class="form-control" <?php if(!isset($_GET["suathongtin"])) echo "readonly"?> name="dc" value="<?php echo $row["dia_chi"]?>">
				</div>
				<?php
				if(!isset($_GET["suathongtin"])) echo "<a href='thongtintaikhoan.php?&suathongtin' class='btn btn-primary'>Đổi thông tin</a>";
				else echo "<button type='submit' class='btn btn-primary'>Đổi thông tin</button>";
				?>
				
			</form>
			<?php
		}
		?>
	</div>	
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>
