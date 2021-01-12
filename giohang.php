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

	require("public/ketnoi.php");
	if(isset($_GET["action"]) and $_GET["action"] == 'hoantat')
	{
		?>
	<div id="cheManHinh">
		<div id="thongBaoChinh">
			<h1>Thông báo!</h1>
			<p>Đặt hàng thành công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkDen">Đã hiểu</a>
		</div>
	</div>
		<?php
		unset($_SESSION["giohang"]);
		unset($_SESSION["stt_gio_hang"]);
		
	}
?>

	<div class="row" style="width: 100%;">
		<span onClick="dongform('formGioHang')" class="col-2"></span>
		<span class="col-8">
			<?php
				if(isset($_SESSION["giohang"]))
				 {
					 
				 
			?>
			<div class="container">
 				<h2>Chi tiết giỏ hàng</h2>  
				<div class="table-responsive">
   					<table class="table table-bordered">
						<thead>
							<tr style="background: url('images/background.jpg')">
								<th>Tên sản phẩm</th>
								<th>Ảnh</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>SL tồn</th>
								<th>Thành tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$_SESSION["tongtien"]=0;
							if(isset($_SESSION["giohang"])){
								foreach($_SESSION["giohang"] as $key=>$value){
									$sql="select * from tbl_san_pham where id_san_pham=".$value;
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
							?>
							<tr>
								<td style="display: none;"><?php echo $row['id_san_pham'] ?></td>
								<td><?php echo $row['ten_san_pham']?></td>
								<td><img style="width: 20%;" src="images/san-pham/<?php echo $row['anh'] ?>"></td>
								<td><?php echo $_SESSION["soluong"][$key] ?></td>
								<td><?php echo $row['don_gia']; ?></td>
								<td><?php echo $row['so_luong']; ?></td>
								<?php
									$thanhtien=$_SESSION["soluong"][$key]*$row['don_gia'];
									$_SESSION["tongtien"]+=$thanhtien;
								?>
								
								<td><?php echo $thanhtien?></td>
								<td><a class="fa fa-trash"></a></td>
							</tr>
							<?php
										}
									}
								}
							}
							?>
						</tbody>
					</table>
				</div>
				<?php if(isset($_SESSION["giohang"])) {?>
				<div style="float: right;"><b>Tổng Tiền: </b><b style="color: red;"><?php echo $_SESSION["tongtien"] ?></b><b> VND</b></div><?php }?>
				<div><br>
					<a href="sanpham.php?&maloai=L01" >&lsaquo; Tiếp tục mua hàng</a>
					<?php if(isset($_SESSION["giohang"])) {?>
					<a onClick="hienthiform('formGioHang')" class="linkDen" style="color: #fff; border-radius: 5px; float: right;">Đặt hàng</a>
					<?php }?>
				</div>
			</div>
		</span>
		<?php
				}
				else
				{
					?>
			<p style="margin-top: 60px;">Giỏ hàng của bạn trống<p>
			<a href="sanpham.php?&maloai=L01" >&lsaquo; Tiếp tục mua hàng</a>
					<?php
				}
		?>
		<span class="col-2" onClick="dongform('formGioHang')"></span>
	</div>
	
<?php
	include("layout/dathang.php");
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>