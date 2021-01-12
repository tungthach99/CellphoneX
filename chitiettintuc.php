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
<body style="transition: 1s; overflow-x: hidden;">
<?php
	session_start();
	include("layout/header.php");
	include("layout/taikhoan.php");
	require("public/ketnoi.php");
?>
<!--                        Tin tuc                           -->
<div style="width:100%; margin-top: 70px;"></div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2">
    <div class="news-header">
					Tin tức <i class='fas fa-angle-double-right' style="margin-left: 20px;"></i>
				</div>
    <?php
$sql="Select * FROM `tbl_tin_tuc` ORDER BY id_tin_tuc";
$result=$con->query($sql);	  		
if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
?>
				<div class="news-content2-1">
					<a href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>"><img id="img-news-1"  src="images/tin-tuc/<?php echo $row['anh'];?>"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1" style="font-size: 14px;"><a href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>"><?php echo $row['tieu_de']?></a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> <?php echo $row['add_date'] ?>
						</div>
					</div>
				</div>
<?php
	}//end_while	
	} //end if
?>
    </div>
<?php
$sql="select * from tbl_tin_tuc where id_tin_tuc='".$_GET['matintuc']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
?>
    <div class="col-sm-8">
    <div class="header-tin-tuc" style="text-align:center;border-bottom: 1px solid black; "><?php echo $row['tieu_de']?></div>
    <div style="font-size: 13px; font-style: italic;margin-left:10px;">@<?php echo $row['tac_gia'];?></div>
    <div style="font-size: 13px; font-style: italic;margin: 0 0 15px 10px;"><?php echo $row['add_date'];?></div>
    <div style="font-size: 15px;margin-left:10px;"><?php echo $row['noi_dung'];?></div>
    </div>
</div>
<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
</body>
</html>