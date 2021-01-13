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
	session_start();
	include("layout/header.php");
	include("layout/taikhoan.php");
	require("public/ketnoi.php");
?>
	<div class="row" style="width: 100%;">
		<span  class="col-2"></span>
		<span class="col-8">
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