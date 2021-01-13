<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Điện thoại, Lap top, sản phẩm công nghệ giá tốt nhất</title>
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
?>
<!--				Banner dau trang					-->
	<section class="leCacMuc">
			<div class="slide">
				<div class="dieuHuongSlide">
					<i onClick="prevSlide()"  id="prev" class="fa fa-angle-left"></i>
					<i onClick="nextSlide()" id="next"  class="fa fa-angle-right"></i>
				</div>
				<div id="chuyenSlide">
					<a><img src="images/section1.png" alt=""></a>
					<a><img src="images/section2.jpg" alt=""></a>
					<a><img src="images/section3.jpg" alt=""></a>
					<a><img src="images/section1.png" alt=""></a>
					<a><img src="images/section2.jpg" alt=""></a>
				</div>
				<div class="dieuHuongSlide2">
					<label onClick="dieuHuong()" class="bar" id="bottom_1"></label>
					<label onClick="dieuHuong2()" class="bar" id="bottom_2"></label>
					<label onClick="dieuHuong3()" class="bar" id="bottom_3"></label>
					<label onClick="dieuHuong4()" class="bar" id="bottom_4"></label>
					<label onClick="dieuHuong5()" class="bar" id="bottom_5"></label>
				</div>
			</div>
		</section>
<!--				Banner dau trang: End.					-->

<!--	Banner danh muc lon							-->
	<div  class="banner-danh-muc">
		<div class="hover-lam-mo banner-danh-muc-trai" style="background-color: #010001;">
			<div class="lamMo">&nbsp;</div>
			<a class="tieuDeBanner" style="" href="" >ĐIỆN THOẠI</a>
			<video id="xuatHien11" autoplay width="100%;">
				<source src="video/1.mp4">
			</video>
		</div>
		<div class="hover-lam-mo banner-danh-muc-phai" style="background-color: #010001;">
			<div class="lamMo">&nbsp;</div>
			<a class="tieuDeBanner" style="" href="" >ĐỒNG HỒ</a>
			<video id="xuatHien12" autoplay width="100%;">
				<source src="video/2.mp4">
			</video>
		</div>
	</div>
	
	<div  class="banner-danh-muc">
		<div class="hover-lam-mo banner-danh-muc-trai" style="background-color: #f2f2f2;">
			<div class="lamMo">&nbsp;</div>
			<a class="tieuDeBanner" style="" href="" >TABLET</a>
			<img src="images/computer_bn.png" width="100%;">
			
		</div>
		<div class="hover-lam-mo banner-danh-muc-phai" style="background-color: #f2f2f2;">
			<div class="lamMo">&nbsp;</div>
			<a class="tieuDeBanner" style="" href="" >TAI NGHE</a>
			<img src="images/airport-pro.png" width="100%;">
		</div>
	</div>
<!--	Banner danh muc lon: end.							-->

<!--	San pham ban chay								-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-10 noiDungGioiThieu">
			<h1>SẢN PHẨM GIÁ RẺ</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;">
				<label id="labelTrai" for="trai"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai" for="phai"><i class="fa fa-angle-right"></i></label>
				<div class="slide">
				<div class="slides">
					<input type="radio" name="dieuHuong" id="trai" checked>
					<input type="radio" name="dieuHuong" id="phai">
					<?php
						$sql="SELECT * FROM tbl_san_pham WHERE id_danh_muc <>'L05' ORDER BY don_gia ASC LIMIT 6";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s1"; ?>">
									<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-heart-o" title="Yêu thích"></i></a></span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_san_pham"];?>
									</div>
									Giá: <span class="giaDo"><?php echo $row["don_gia"];?><sup><u>đ</u></sup></span>
									<span class="giaGachNgang"></span>
<!--
									<div>
										<i>Đánh giá: </i>
										<span class="danhGia">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
									</div>
-->
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>
<!--	San pham ban chay								-->
	
<!--	Zoom anh su kien								-->
	<div id="noiDungPhongTo">
		<div class="menuAnh">
			<img src="images/hispeed.png" onClick="zoom(this)" alt="">
			<img src="images/ip12.png" onClick="zoom(this)" alt="">
			<img src="images/homepodmini.png" onClick="zoom(this)" alt="">
			<img src="images/sretina.png" onClick="zoom(this)" alt="">
			<img src="images/lidar.png" onClick="zoom(this)" alt="">
			<img src="images/mag safe.png" onClick="zoom(this)" alt="">
		</div>
		<div class="anhPhongTo">
			<img id="anhPhongTo" src="images/hispeed.png">
		</div>
		<i class="fa fa-remove thoat" style="color: #fff;" onClick="dongform('noiDungPhongTo')" title="Đóng"></i>
	</div>
<!--	Zoom anh su kien: end.								-->
	
<!--	Su kien												-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-7">
			<div class="row">
				<span class="anhSuKien col-sm-4">
					<img src="images/hispeed.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
				<span class="anhSuKien col-sm-4">
					<img src="images/ip12.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
				<span class="anhSuKien col-sm-4">
					<img src="images/homepodmini.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
			</div>
			<div class="row">
				<span class="anhSuKien col-sm-4">
					<img src="images/sretina.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
				<span class="anhSuKien col-sm-4">
					<img src="images/lidar.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
				<span class="anhSuKien col-sm-4">
					<img src="images/mag safe.png" onClick="zoom(this)" alt="" title="Xem ảnh">
				</span>
			</div>
		</span>
		<span class="col-sm-3 noiDungGioiThieu">
			<h6>SỰ KIỆN NỔI BẬT</h6>
			<h1>"HI, SPEED"</h1>
			<p>Ra mắt Iphone 12 và quá nhiều thứ đã bị bỏ lỡ!!!</p>
			<a href="" class="linkDen">CHI TIẾT SỰ KIỆN</a>
		</span>
	</div>
<!--	Su kien: end.												-->
	
<!--	San pham noi bat														-->
		<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-10 noiDungGioiThieu">
			<h1>SẢN PHẨM NỔI BẬT</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;">
				<label id="labelTrai4" for="trai4"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai4" for="phai4"><i class="fa fa-angle-right"></i></label>
				<div class="slide">
				<div class="slides">
					<input type="radio" name="dieuHuong" id="trai4" checked>
					<input type="radio" name="dieuHuong" id="phai4">
					<?php
						$sql="SELECT * FROM tbl_san_pham WHERE id_danh_muc <>'L05' ORDER BY don_gia ASC LIMIT 6";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s4"; ?>">
									<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-heart-o" title="Yêu thích"></i></a></span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_san_pham"];?>
									</div>
									Giá: <span class="giaDo"><?php echo $row["don_gia"];?><sup><u>đ</u></sup></span>
									<span class="giaGachNgang"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>
<!--	San pham noi bat: end.														-->

<!--San pham moi-->
		<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-10 noiDungGioiThieu">
			<h1>SẢN PHẨM MỚI</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;">
				<label id="labelTrai2" for="trai2"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai2" for="phai2"><i class="fa fa-angle-right"></i></label>
				<div class="slide">
				<div class="slides">
					<input type="radio" name="dieuHuong" id="trai2" checked>
					<input type="radio" name="dieuHuong" id="phai2">
					<?php
						$sql="SELECT * FROM tbl_san_pham WHERE id_danh_muc <>'L05' ORDER BY don_gia ASC LIMIT 6";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s2"; ?>">
									<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-heart-o" title="Yêu thích"></i></a></span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_san_pham"];?>
									</div>
									Giá: <span class="giaDo"><?php echo $row["don_gia"];?><sup><u>đ</u></sup></span>
									<span class="giaGachNgang"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>
<!--San pham moi: end.-->
	
<!--	Ban tin										-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1">
		</span>
		<span class="col-sm-10">
			<h1>TIN TỨC</h1>
			<div class="row" style=" width: 100%;">
				<label id="labelTrai3"><i class="fa fa-angle-left" onClick="prevTinTuc()"></i></label>
				<label onClick="nextTinTuc()" id="lablePhai3"><i class="fa fa-angle-right"></i></label>
				<div class="slide">
					<div class="slides">
						<div class="thanhPhan s3" id="tinTuc">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
						<div class="thanhPhan">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
						<div class="thanhPhan">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
						<div class="thanhPhan">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
						<div class="thanhPhan">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
						<div class="thanhPhan">
							<a class="tinTuc" href="#">
								<img src="images/onepl-nore.png" width="100%;" alt="">
								<h6><b>OnePlus Nord SE với pin 4,500 mAh, sạc nhanh 65W sẽ ra mắt vào Q1/2021 với giá cực rẻ</b></h6>
								<p>OnePlus đã tham gia vào phân khúc smartphone tầm trung vào tháng 7 vừa qua. Gần đây, công ty này...</p>
								<h7>@tungthach</h7>
							</a>
						</div>
					</div>
				</div>
			</div>
		</span>
	</div>
<!--	Ban tin: end.										-->
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>

	
</body>
</html>
