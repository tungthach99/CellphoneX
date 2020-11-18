<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CellphoneX - Sản phẩm chính hãng, chất lượng số 1 Việt Nam</title>
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
?>
	<section class="leCacMuc" style="margin-top: 48px;">
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
				<div style="width: 5%; height: 100%; position: absolute;" class="lamMo"></div>
				<div style="width: 5%; height: 100%; position: absolute; left: 95%;" class="lamMo"></div>
			</div>
		</section>
	
	<!--					Banner gioi thieu				-->
	<div class="row" style="width: 101%; margin-top: 1%;">
		<span class="banner-gioi-thieu-den" style="margin-right: 0.5%;">
			<a href="" class="tieuDeBanner">ĐIỆN THOẠI</a>
			<video id="xuatHien11" autoplay width="100%;">
				<source src="images/large_2x.mp4">
			</video>
		</span>
		<span class="banner-gioi-thieu-trang" style="margin-left: 0.5%;">
			<a href="" class="tieuDeBanner">ĐỒNG HỒ</a>
			<video id="xuatHien12" autoplay width="50%;">
				<source src="images/large (1).mp4">
			</video>
		</span>
	</div>
	<div class="row" style="width: 101%;">
		<span class="banner-gioi-thieu-trang" style="margin-right: 0.5%;">
			<a href="" class="tieuDeBanner">TABLET</a>
			<img id="xuatHien21" src="images/computer_bn.png" alt="" style="width: 100%;">
		</span>
		<span class="banner-gioi-thieu-den" style="margin-left: 0.5%;">
			<a href="" class="tieuDeBanner">LAPTOP</a>
			<img id="xuatHien22" src="images/laptop.png" alt="img" style=" width: 70%;">
		</span>
	</div>
	<div class="row leCacMuc" style="width: 101%;">
		<span class="banner-gioi-thieu-den" style="margin-right: 3%;">
			<a href="" class="tieuDeBanner">TAI NGHE</a>
			<img id="xuathien31" src="images/airport.png" alt="img" style="width: 70%;">
		</span>
		<span class="noiDungGioiThieu">
			<h6>HÃY CÙNG XÂY DỰNG CỘNG ĐỒNG CELLPHONEX</h6>
			<h1><b>CellphoneX</b></h1>
			<p>Tham gia vào cộng đồng của CellphoneX để cập nhật tin tức mới nhất của chúng tôi và nhận ưu đãi 10% cho đơn đặt hàng đầu tiên.</p>
			<a href="" class="linkDen">ĐĂNG KÝ NGAY</a>
		</span>
	</div>
	<!--				Banner gioi thieu: End.					-->
	
	<!--				San pham ban chay						-->
<<<<<<< HEAD:chinhsach.php
	<div class="row leCacMuc" style="width: 100%;">
=======
	<div class="row leCacMuc" style="width: 100%">
>>>>>>> 6c1a454489e2e528da4e9c5f8fd390e7f755dd89:home.html
		<span class="col-sm-1"></span>
		<span class="col-sm-3">
			<img src="images/Nâu Giản dị Ảnh ghép Bài đăng Facebook.png" alt="" width="100%">
		</span>
		<span class="col-sm-7 noiDungGioiThieu">
			<h6>SIÊU KHUYẾN MẠI </h6>
			<h1>SẢN PHẨM GIÁ TỐT</h1>
			<p>Theo dõi những hoạt động của chúng tôi để kịp thời đón nhận những ưu đãi cực lớn.</p>
			<a href="" class="linkDen">KHÁM PHÁ CÁC KHUYẾN MẠI</a>
			<div style="text-align: center; margin-top: 8%;">
			<div class="row" style=" width: 100%;">
				<label id="labelTrai" for="trai"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai" for="phai"><i class="fa fa-angle-right"></i></label>
					<div class="slide">
				<div class="slides">
					<input type="radio" name="dieuHuong" id="trai" checked>
					<input type="radio" name="dieuHuong" id="phai">
					<div class="thanhPhan s1">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg" alt="galaxy s10+">
						</div>
						<div style="font-size: 16px;">
							Samsung Galaxy S10+ (Plus)
						</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg">
						</div>
						<div style="font-size: 16px;">Samsung Galaxy S10+ (Plus)</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg">
						</div>
						<div style="font-size: 16px;">Samsung Galaxy S10+ (Plus)</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg">
						</div>
						<div style="font-size: 16px;">Samsung Galaxy S10+ (Plus)</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg">
						</div>
						<div style="font-size: 16px;">Samsung Galaxy S10+ (Plus)</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPham">
							<img src="images/61YVqHdFRxL._AC_SL1322_.jpg">
						</div>
						<div style="font-size: 16px;">Samsung Galaxy S10+ (Plus)</div>
						Giá: <span class="giaDo">12.400.000<sup><u>đ</u></sup></span>
						<span class="giaGachNgang">19.990.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
						</div>
					</div>
				</div>
					</div>
			</div>
			
		</div>
		</span>
	</div>
	<!--				San pham ban chay: end.					-->
	
	<!--				Zoom anh su kien									-->
	<div id="noiDungPhongTo">
		<div class="menuAnh">
			<a href="javascript:void[0]"><img src="images/hispeed.png" onClick="zoom(this)" alt=""></a>
			<a href="javascript:void[0]"><img src="images/ip12.png" onClick="zoom(this)" alt=""></a>
			<a href="javascript:void[0]"><img src="images/homepodmini.png" onClick="zoom(this)" alt=""></a>
			<a href="javascript:void[0]"><img src="images/sretina.png" onClick="zoom(this)" alt=""></a>
			<a href="javascript:void[0]"><img src="images/lidar.png" onClick="zoom(this)" alt=""></a>
			<a href="javascript:void[0]"><img src="images/mag safe.png" onClick="zoom(this)" alt=""></a>
		</div>
		<div class="anhPhongTo">
			<img id="anhPhongTo" src="images/hispeed.png">
		</div>
		<a href="javascript:void[0]"><i class="fa fa-remove thoat" style="color: #fff;" onClick="dongform('noiDungPhongTo')" title="Đóng"></i></a>
	</div>
	<!--				Zoom anh su kien: end.
	
	<!--				Su kien									-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-7">
			<div class="row">
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/hispeed.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
				</span>
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/ip12.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
				</span>
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/homepodmini.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
				</span>
			</div>
			<div class="row">
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/sretina.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
				</span>
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/lidar.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
				</span>
				<span class="anhSuKien col-sm-4">
					<a href="javascript:void[0]"><img src="images/mag safe.png" onClick="zoom(this)" alt="" title="Xem ảnh"></a>
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
	<!--				Su kien: end.							-->
	
<!--	Tin tuc														-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1"></span>
		<span class="col-sm-7 noiDungGioiThieu">
			<h6>NHỮNG MẸO DÙNG WINDOWS CÓ THỂ BẠN CHƯA BIẾT</h6>
			<h1>KHÁM PHÁ VÔ VÀN NHỮNG MẸO "KỲ DIỆU"</h1>
			<p>Hệ điều hành Windows là hệ điều hành tuyệt vời vả để có những trải nghiệm thú vị với nó, chắc chắn bạn sẽ không thể bỏ qua được các mẹo dùng windows cực hữu ích này.</p>
			<a href="" class="linkDen">TÌM HIỂU THÔI!</a>
			<div style="text-align: center; margin-top: 8%;">
			<div class="row" style=" width: 100%;">
				<label id="labelTrai2" for="trai2"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai2" for="phai2"><i class="fa fa-angle-right"></i></label>
					<div class="slide">
				<div class="slides">
					<input type="radio" name="dieuHuong" id="trai2" checked>
					<input type="radio" name="dieuHuong" id="phai2">
					<div class="thanhPhan s2">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
					<div class="thanhPhan">
						<span class="hoverSanPham"><a href="#"><i class="fa fa-external-link" title="Mở liên kết"></i></a><a href="#"><i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a></span>
						<div class="anhSanPhamLon">
							<img src="images/dell xps.png" alt="Dell XPS 13 9300 2020">
						</div>
						<div style="font-size: 16px;">
							Dell XPS 13 9300 2020 - Intel Core i7-1065G7/RAM 16G...
						</div>
						Giá: <span class="giaDo">39.900.000<sup><u>đ</u></sup></span>
						<div>
							<i>Đánh giá: </i>
							<span class="danhGia">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
						</div>
					</div>
				</div>
					</div>
			</div>
			
		</div>
		</span>
		<span class="col-sm-3">
			<img src="images/meowindows.png" alt="mẹo hay công nghệ" width="100%;">
		</span>
	</div>
<!--	Tin tuc: end.												-->
	
<!--	Tin khac													-->
	<div class="row leCacMuc" style="width: 100%;">
		<span class="col-sm-1">
		</span>
		<span class="col-sm-10">
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
	
<!--	Tin khac: end.												-->
	
<!--				Footer										-->
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
<!--				Footer: end.								-->
</body>
</html>
