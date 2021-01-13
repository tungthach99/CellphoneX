<div id="formDangNhap">
	<?php 
	if(!isset($_SESSION["id-user"])){?>
	<h4>ĐĂNG NHẬP</h4>
	<form action="customer/Account/xldangnhap.php" method="post">
		<input type="text" placeholder="Email của bạn" id="txttendangnhap" name="txttendangnhap"><br>
		<input type="password" placeholder="Mật khẩu" id="txtmatkhau" name="txtmatkhau"><br>
		<input type="checkbox" name="nhomatkhau">Nhớ mật khẩu<br>
		<input type="submit" value="Đăng nhập">
	</form>
	<div class="noiDungFormDangNhap">
		Bạn chưa có tài khoản? <a href="chitiettk.php">Tạo tài khoản.</a>
	</div>
	<?php }?>
	<?php if(isset($_SESSION["id-user"])){?>
	<h4>XIN CHÀO <?php echo $_SESSION["ten-user"]?>
	</h4>
	<div style="margin: 10% 0;">
		<img src="images/20 - Copy.png" width="120px" height="120px"; style="max-width: 150px; max-height: 150px; border: 2px solid; border-radius: 50%;">
	</div>
	<div class="danhMucDieuHuong"><a>Cài đặt tài khoản</a></div>
	<div class="danhMucDieuHuong"><a>Lịch sử mua hàng</a></div>
	<div class="danhMucDieuHuong"><a>Đổi mật khẩu</a></div>
	<div class="danhMucDieuHuong"><a href="customer/Account/xldangxuat.php"><b>Đăng xuất&nbsp;</b></a></div>
	<?php }?>
</div>