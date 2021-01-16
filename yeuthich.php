<?php
ob_start(); 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Sản phẩm yêu thích</title>
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
		<span  class="col-2"></span>
		<span class="col-8">
			<div id="product-content">
<?php
			if(isset($_SESSION["id-user"]))
			{
				$sql="SELECT tbl1.id_san_pham, tbl1.ten_san_pham,tbl1.don_gia,tbl1.anh, tbl3.muc_khuyen_mai,tbl1.don_gia*(1-tbl3.muc_khuyen_mai/100) AS gia_moi 
				FROM tbl_san_pham as tbl1 
				INNER JOIN (SELECT id_san_pham FROM tbl_yeu_thich INNER JOIN tbl_khach_hang  ON tbl_yeu_thich.id_khach_hang=tbl_khach_hang.id_khach_hang 
				WHERE tbl_khach_hang.id_khach_hang='".$_SESSION["id-user"]."') AS tbl2 ON tbl1.id_san_pham = tbl2.id_san_pham
				LEFT OUTER JOIN tbl_khuyen_mai AS tbl3 ON tbl1.id_san_pham=tbl3.id_san_pham";
	  			$result=$con->query($sql);
	 			if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
?>
						<div id="product-1">
							<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><img style="margin-top: 10px;" id="product-img" src="images/san-pham/<?php echo $row['anh']; ?>"></a>
							<!--			san pham yeu thich-->
		<?php
		if (isset($_SESSION["id-user"]))
		{
			$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$row["id_san_pham"]."'";
			$resultyt=$con->query($sqlcheckyeuthich);
			if($resultyt->num_rows>0)
			{
		?>
		<a class="heart" class="heart" title="Yêu thích" href="customer/Product/xlxoasanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart" title="Bỏ thích"></i>
		</a>
		<?php
			}
			else
			{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart-o" title="Yêu thích"></i>
		</a>
		<?php
			}
		}
		else
		{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart-o" title="Yêu thích"></i>
		</a>
		<?php
		}
		?>
<!--			san pham yeu thich: end.-->
							<p id="title-product-1"><?php echo $row["ten_san_pham"];?></p>
							<?php
							if (isset($row["muc_khuyen_mai"]))
							echo "<p id='title-product-2'>Giá: ".number_format($row["gia_moi"]).
							"đ <span style='font-size:12px; color:#2c3e50; text-decoration: line-through'>".number_format($row["don_gia"])."đ</span></p>";
							else
							echo  "<p id='title-product-2'>Giá: ".number_format($row["don_gia"])."đ </p>";
							?>
							<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>">
							<button class="nutChiTiet">Chi tiết</button></a>
						</div>
		<!--product=1=>product_detail.php-->

<?php 
					}//end while
				}//if_num_row
			}
?>
			</div>
			<a href="sanpham.php?&maloai=L01" >&lsaquo; Tiếp tục mua hàng</a>
		</span>
		<span class="col-2" onClick="dongform('formGioHang')"></span>
	</div>
	
<?php
	include("layout/cacnut.php");
	include("layout/footer.php");

?>

	
</body>
</html>