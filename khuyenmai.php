<?php
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách khuyến mại</title>
    <script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<link rel="shortcut icon" href="images/20.png">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
<!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
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
require("public/ketnoi.php");
?>
    <div class="box-header-km">
        <div class="row" style="width: 100%;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" id="box-menu" >
                <ul>
                    <li><a id="box-km-1" class="box-menu-active"  onclick="doiboxmenu1()">Khuyến mãi hot</a></li>
                    <li><a id="box-km-2" class onclick="doiboxmenu2()">Hotsales cuối tuần</a> </li>
                    <li><a  id="box-km-3" class onclick="doiboxmenu3()">Apple SALES</a> </li>
                    <li><a id="box-km-4" class onclick="doiboxmenu4()">Ưu đãi đối tác</a></li>
                </ul>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="content-km">
        <div class="row" style="width: 100%;">
			<div class="col-sm-1"></div>
			<!---               content km 1                       -->
            <div class="col-sm-10" id="km-content-1">
                <div class="km-grid">
                    <?php
                    $sql="Select * FROM tbl_san_pham INNER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where 
                    tbl_khuyen_mai.id_khuyen_mai = 'KM01'";
                    $result=$con->query($sql);	  		
                    if($result->num_rows>0)
                        {
                        while($row=$result->fetch_assoc())
                        {
                    ?>
                    <a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>" target="_blank" class="km km-title" >
                        <div class="muc-khuyen-mai">-<?php echo $row['muc_khuyen_mai'] ?>%</div>
                        <img class="km-image" src="images/khuyen-mai/<?php echo $row['anhkm']?>" alt="Chương trình khuyến mại 1">
                        <p class="km-title-1">
                            <?php echo $row['ten_khuyen_mai']?>
                        </p>
                        <p id="footer-km-content"><span id="footer-km-content-1">Đang diễn ra</span> <span id="footer-km-content-2">Xem chi tiết</span></p>         
                    </a>
                    <?php 
                        }
                    }
                    ?>
                </div>
			</div>
<!---               content km 2                       -->
			<div class="col-sm-10" id="km-content-2">
                <div class="km-grid">
                <?php
                    $sql="Select * FROM tbl_san_pham INNER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where
                     tbl_khuyen_mai.id_khuyen_mai = 'KM02'";
                    $result=$con->query($sql);	  		
                    if($result->num_rows>0)
                        {
                        while($row=$result->fetch_assoc())
                        {
                    ?>
                    <a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>" target="_blank" class="km km-title" >
                        <div class="muc-khuyen-mai">-<?php echo $row['muc_khuyen_mai'] ?>%</div>
                        <img class="km-image" src="images/khuyen-mai/<?php echo $row['anhkm']?>" alt="Chương trình khuyến mại 1">
                        <p class="km-title-1">
                            <?php echo $row['ten_khuyen_mai']?>
                        </p>
                        <p id="footer-km-content"><span id="footer-km-content-1">Đang diễn ra</span> <span id="footer-km-content-2">Xem chi tiết</span></p>         
                    </a>
                    <?php 
                        }
                    }
                    ?>
                </div>
			</div>
			<!---               content km 3                       -->
			<div class="col-sm-10" id="km-content-3">
                <div class="km-grid">
                <?php
                    $sql="Select * FROM tbl_san_pham INNER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where
                     tbl_khuyen_mai.id_khuyen_mai = 'KM03'";
                    $result=$con->query($sql);	  		
                    if($result->num_rows>0)
                        {
                        while($row=$result->fetch_assoc())
                        {
                    ?>
                    <a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>" target="_blank" class="km km-title" >
                         <div class="muc-khuyen-mai">-<?php echo $row['muc_khuyen_mai'] ?>%</div>
                        <img class="km-image" src="images/khuyen-mai/<?php echo $row['anhkm']?>" alt="Chương trình khuyến mại 1">
                        <p class="km-title-1">
                            <?php echo $row['ten_khuyen_mai']?>
                        </p>
                        <p id="footer-km-content"><span id="footer-km-content-1">Đang diễn ra</span> <span id="footer-km-content-2">Xem chi tiết</span></p>         
                    </a>
                    <?php 
                        }
                    }
                    ?>
                </div>
			</div>
			<!---               content km 4                       -->
			<div class="col-sm-10" id="km-content-4">
                <div class="km-grid">
                <?php
                    $sql="Select * FROM tbl_san_pham INNER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where
                     tbl_khuyen_mai.id_khuyen_mai = 'KM04'";
                    $result=$con->query($sql);	  		
                    if($result->num_rows>0)
                        {
                        while($row=$result->fetch_assoc())
                        {
                    ?>
                    <a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>" target="_blank" class="km km-title" >
                        <div class="muc-khuyen-mai">-<?php echo $row['muc_khuyen_mai'] ?>%</div>
                        <img class="km-image" src="images/khuyen-mai/<?php echo $row['anhkm']?>" alt="Chương trình khuyến mại 1">
                        <p class="km-title-1">
                            <?php echo $row['ten_khuyen_mai']?>
                        </p>
                        <p id="footer-km-content"><span id="footer-km-content-1">Đang diễn ra</span> <span id="footer-km-content-2">Xem chi tiết</span></p>         
                    </a>
                    <?php 
                        }
                    }
                    ?>
                </div>
			</div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!-- End noi dung chinh -->
    <?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
<!--							Cac nut o goc: end.				-->
</body>
</html>