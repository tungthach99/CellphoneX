<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Giới thiệu</title>
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
		if (e > 1) {
			document.getElementById("lamMo").style.display="block";
		}
		if (e==0) {
			document.getElementById("lamMo").style.display="none";
		}
	});
	$("#veDauTrang").click(function () {
		$('body,html').animate({
			scrollTop: 0
		})
	})
	$("#chinhSachSuDung").click(function(){
		$('body,html').animate({
			scrollTop: 32
		})
	})
	$("#chinhSachBaoHanh").click(function(){
		$('body,html').animate({
			scrollTop: 290
		})
	})
	$("#chinhSachBaoMat").click(function(){
		$('body,html').animate({
			scrollTop: 580
		})
	})
}
});
})( jQuery );
</script>
</head>
<body style="transition: 1s">
<?php
include("layout/header.php");
include("layout/taikhoan.php");
?>
	
<!--				Noi dung chinh							-->
		<div id="about-us" style="height: 25px;"></div>
		<nav class="gioi-thieu-nav" style="margin-top=50px;">
				<ul>
					<li><a class="gioi-thieu-link" href="#about-us" style="border:0; ">Về chúng tôi <i class='fas fa-angle-double-right' style="float:right"></i></a></li>
					<li><a class="gioi-thieu-link" href="#dichVuBanHang"  style="border-top: 3px solid #2c3e50;">Dịch vụ bán hàng <i class='fas fa-angle-double-right' style="float:right"></i></a></li>
					<li><a class="gioi-thieu-link" href="#hanhTrinh" style="border-top: 3px solid #2c3e50;">Hành trình phát triển<span> <i class='fas fa-angle-double-right' style="float:right"></i></a>
				</ul>
			</nav>
			<main id="main-doc">
				<h2  style="margin-top: 35px;">Về chúng tôi</h2>
				<p>Hệ thống bán lẻ sản phẩm công nghệ CellphoneX là đơn vị kinh doanh không có thực. Được hình thành từ thói quen xem review công nghệ của các hot reviewer CellPhoneS và mình quyết định lấy tên tương tự.</p>
				<p>Sản phẩm này làm ra không nhằm mục đích kinh doanh, chỉ mang tính chất phục vụ cho việc học tập nghiên cứu tại giảng đường Đại học. Mong ai ngang qua đừng bắt bẻ về vấn đề bản quyền.</p>
				<p id="dichVuBanHang">Vì những giải thích chân thực kể trên nên chúng tôi chằng có gì phải bịa ra để nói về chúng tôi nữa, nếu quý vị muốn đọc tiếp xin mời kéo đến phần tiếp theo.</p>
				<h2 style="margin-top:40px">Dịch vụ bán hàng</h2>
				<div class="row">
					<span class="col-4">
						<h1><i class="fa fa-american-sign-language-interpreting"></i></h1>
						<h4>Cam kết chính hãng</h4>
						CellphoneX là hệ thống bán lẻ sản phẩm công nghệ hợp pháp thuộc công ty XXX. Cam kết luôn đem đến khách hàng những sản phẩm có chất lượng tốt nhất.
					</span>
					<span class="col-4">
						<h1><i class="fa fa-handshake-o"></i></h1>
						<h4>Hỗ trợ trọn đời</h4>
						Bảo hành miễn phí lên đến 2 năm. Tư vấn miễn phí trọn đời.
					</span>
					<span class="col-4">
						<h1><i class="fa fa-truck"></i></h1>
						<h4>Giao hàng toàn quốc</h4>
						Giao hàng toàn quốc từ 2 - 7 ngày. Đổi trả trong vòng 15 ngày.
					</span>
				</div>
				<div  id="hanhTrinh" style="height:40px;"></div>
				<h2>Hành trình phát triển</h2>
				<p>Hệ thống bán lẻ sản phẩm công nghệ CellphoneX là đơn vị kinh doanh không có thực. Được hình thành từ thói quen xem review công nghệ của các hot reviewer CellPhoneS và mình quyết định lấy tên tương tự.</p>
				<p>Sản phẩm này làm ra không nhằm mục đích kinh doanh, chỉ mang tính chất phục vụ cho việc học tập nghiên cứu tại giảng đường Đại học. Mong ai ngang qua đừng bắt bẻ về vấn đề bản quyền.</p>
				<p>Không biết viết gì nhưng muốn nội dung phải rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài, rất dài.</p>
			</main>
<!--				Noi dung chinh: End.					-->
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
		if (e > 1) {
			document.getElementById("lamMo").style.display="block";
		}
		if (e==0) {
			document.getElementById("lamMo").style.display="none";
		}
	});
	$("#veDauTrang").click(function () {
		$('body,html').animate({
			scrollTop: 0
		})
	})
	$("#chinhSachSuDung").click(function(){
		$('body,html').animate({
			scrollTop: 32
		})
	})
	$("#chinhSachBaoHanh").click(function(){
		$('body,html').animate({
			scrollTop: 290
		})
	})
	$("#chinhSachBaoMat").click(function(){
		$('body,html').animate({
			scrollTop: 580
		})
	})
}
});
})( jQuery );
</script>
</head>
<body style="transition: 1s">
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
<!--							Cac nut o goc: end.				-->

</body>
</html>
