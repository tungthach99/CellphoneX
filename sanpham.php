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
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
		$sql="Select image_product.idimg,image_product.idsrc from image_product inner join product on image_product.idimg = product.idimg";
	  		$result=$con->query($sql);
	  		
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
			<img src="images/san-pham/<?php echo $row['idsrc']; ?>" onClick="zoom(this)" alt="">
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
<div style="margin-top:100px; height: width:100%;"></div>
<div id="row">
	<div id="col-sm-2">
	<!--menu trái-->
		<?php 
		include("layout/leftmenu.php");
		?>
	</div>
	<div id="col-sm-10" style="margin-left: 100px;">
	<!--nội dung-->
    <?php	
		if(isset($_GET["product"]))
		{
				include("customer/Product/product_detail.php");
			if ($_GET["product"]=="0")
		
				include("customer/product/product_info.php");
		}
		else
            include("customer/product/product_info.php");
        ?>
	</div>
</div>


	
</body>
</html>