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
</head>
<body>
<?php
	session_start();
	include("layout/header.php");
	include("layout/taikhoan.php");
	include("layout/giohang.php");
	require("public/ketnoi.php");
?>
    <div id="left" >
	<!--menu trái-->
		<?php 
		include("layout/leftmenu.php");
		?>
    </div>
	<div id="right">
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

<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>