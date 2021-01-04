<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tin tức</title>
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
include("layout/giohang.php");
?>
<!--                        Tin tuc                           -->
<section class="content-news1">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 content-news">
			<div class="left-content-news1">
				<div class="flex">
				<a  href="#">
					<div id="thumbnail1" class="thumbnail1">
					<article>Tính năng mới "phát hiện mật khẩu bị lộ" trên IOS 14, đây là cách sử dụng</article>	
					</div>
				</a>
				<div class="news-content1" id="news-content1">
					<div class="news-content1-1">
						<a href="#">
							<img id="img-news" src="images/tin-tuc/tin-tuc-2.png" >
							<p>Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn tay to</p>
						</a>
					</div>
					<div class="news-content1-1">
						<a href="#">
							<img id="img-news" src="images/tin-tuc/tin-tuc-2.png" >
							<p>Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn tay to</p>
						</a>
					</div>
					<div class="news-content1-1">
						<a href="#">
							<img id="img-news" src="images/tin-tuc/tin-tuc-2.png" >
							<p>Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn tay to</p>
						</a>
					</div>
					<div class="news-content1-1">
						<a href="#">
							<img id="img-news" src="images/tin-tuc/tin-tuc-2.png" >
							<p>Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn tay to</p>
						</a>
					</div>
					<div class="news-content1-1">
						<a href="#">
							<img id="img-news" src="images/tin-tuc/tin-tuc-2.png" >
							<p>Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn tay to</p>
						</a>
					</div>
				</div>
				</div>
			</div>
			<div class="right-content-news1">
				<div class="news-header">
					Tin tức <i class='fas fa-angle-double-right'></i>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
				<div class="news-content2-1">
					<a href="#"><img id="img-news-1" src="images/tin-tuc/tin-tuc-6.png"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="#">Trên tay Nokia 215 4G: Thiết kế gọn, kết nối LTE, đa dạng trò chơi và tiện ích</a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> 9 giờ trước 
							<i class="fa fa-comment-o" style="margin-left: 10px;"></i> 1 bình luận
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</section>



<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
</body>
</html>