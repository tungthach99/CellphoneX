<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Danh sách sản phẩm</title>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/20.png">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<!-- Phong to anh -->
<div id="noiDungPhongTo" style="100%">
		<div class="menuAnh">
		<?php
		$sql="Select * from tbl_san_pham inner join tbl_anh on tbl_san_pham.id_anh = tbl_anh.id_anh where tbl_san_pham.id_san_pham ='".$_GET["masanpham"]."'";
	  		$result=$con->query($sql);
	  		
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
			<img src="images/san-pham/<?php echo $row['id_src']; ?>" onClick="zoom(this)" alt="">
			<?php
			}//end_while	
			} //end if

		?>
		</div>
		<div class="anhPhongTo">
			<img id="anhPhongTo" src="images/sanpham/iPhoneX-1.jpg">
		</div>
		<i class="fa fa-remove thoat" style="color: #fff;" onClick="dongform('noiDungPhongTo')" title="Đóng"></i>
	</div>
<!-- Phong to anh end-->
<div class="row" style="width: 101%; margin-top:100px;">
	<span class="col-sm-2 d-none d-lg-block">
	<!--menu trái-->
		<?php 
		include("layout/leftmenu.php");
		?>
	</span>
	<span class="col-sm-10">
	<!--nội dung-->
    <?php	
		if(isset($_GET["maloai"]))
		{
				include("customer/Product/product_info.php");
		}
		if(isset($_GET["product"]))
		{
				include("customer/Product/product_detail.php");
			if ($_GET["product"]=="0")
		
				include("customer/product/product_info.php");
		}
		
		//code tim kiem san pham
		if(isset($_GET["tensanpham"]))
		{
				include("customer/Product/product_info.php");
		}
		//end tim kiem.
        ?>
	</span>
</div>
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>