<?php
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Phiếu hỗ trợ</title>
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
<!-- Noi dung chinh -->
<main class="main-ho-tro">
<h1 id="hotro-title">Phiếu hỗ trợ</h1>
<p id="hotro-description"><em style="text-align: center;">Cảm ơn bạn đã dành thời gian giúp chúng tôi cải thiện hệ thống</em> </p>
<form name="form1" id="hotro-form">
    <div class="hotro-div-group">
        <label id="hotro-name-label"  for="name">Họ và tên</label><br>
        <input id="hotro-name" class="hotro-control" type="text" placeholder="Nhập họ và tên"  required>
        <label id="hotro-email-label" for="email">Email</label><br>
        <input id="hotro-email" class="hotro-control" type="email" placeholder="Nhập email" required>
        <label id="hotro-number-label"  for="number">Tuổi<span id="hotro-clue"> (tùy chọn)</span></label>
        <input id="hotro-number" class="hotro-control" type="number" placeholder="Enter your age" min="10" max="99">
    </div>  
    <div class="hotro-div-group">
        <p id="hotro-label">Vấn đề của bạn là gì</p>
        <select id="hotro-dropdown" class="hotro-control" name="van-de" required>
            <option disabled selected value>Hãy lựa chọn vấn đề</option>
            <option value="san-pham">Sản phẩm</option>
            <option value="dich-vu">Dịch vụ</option>
            <option value="nhan-vien">Nhân viên</option>
            <option value="gia-ca">Giá cả</option>
            <option value="khac">Khác</option>
        </select>
    </div>
    <div class="hotro-div-group">
        <p id="hotro-label">Xin vui lòng mô tả chi tiết vấn đề hoặc vấn đề khác</p>
        <textarea id="hotro-comment-box" name="description" placeholder="Hãy nhập vấn đề ở đề"> </textarea>
    </div>
    <button id="hotro-submit" name="submit" type="submit">Submit</button>
</form>
</main>
<!-- End noi dung chinh -->
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
</body>
</html>