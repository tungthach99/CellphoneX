<?php
ob_start(); 
session_start();
?>
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
<!--                        Tin tuc                           -->
<?php
$sql="select * from tbl_tin_tuc";
$result=$con->query($sql);
$row=$result->fetch_assoc();
?>
<section class="content-news1">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 content-news">
			<div class="left-content-news1">
				<div class="flex">
				<a  href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>">
					<div id="thumbnail1" class="thumbnail1">
					<article><?php echo $row['tieu_de']?></article>	
					</div>
				</a>
				</div>
			</div>
			<div class="right-content-news1">
				<div class="news-header">
					Tin tức <i class="fa fa-angle-double-right"></i>
				</div>
<?php
$sql="Select * FROM `tbl_tin_tuc` ORDER BY add_date DESC LIMIT 4";
$result=$con->query($sql);	  		
if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
?>
				<div class="news-content2-1">
					<a href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>"><img id="img-news-1" src="images/tin-tuc/<?php echo $row['anh'];?>"></a>
					<div class="news-content2-11">
						<h3 class="header-content2-1"><a href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>"><?php echo $row['tieu_de']?></a><br></h3>
						<div class="news-content-info">
							<i class="fa fa-clock-o"></i> <?php echo $row['add_date'] ?>
							<?php
							$sql1= "Select COUNT(id_tin_tuc) AS so_binh_luan FROM tbl_binh_luan WHERE id_tin_tuc='".$row['id_tin_tuc']."'";
							$result1=$con->query($sql1);
							$row1=$result1->fetch_assoc();
							?>
							<i class="fa fa-commenting-o" style="margin-left: 15px;"></i> <?php echo $row1['so_binh_luan'] ?> bình luận
						</div>
					</div>
				</div>
<?php
	}//end_while	
	} //end if
?>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
<!-- Tin tuc content 2 -->
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
	<div class="tin-tuc">
	<?php 
	  $sbmoitrang=3;
	  $sql="Select *,SUBSTR(noi_dung,1,100) AS tom_tat from tbl_tin_tuc";
	  $sql.=" LIMIT $sbmoitrang";
	  if(isset($_GET["trang"]))
	  {
	  	$offset=$sbmoitrang*($_GET['trang']-1);
	  	$sql.=" OFFSET $offset";
	  }
	  
	  $result=$con->query($sql);
	  $i=0;
	 if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{ //for->while
	if($i%3==0)
	{
?>
<?php 
	}//end if
?>
<div class="tin-tuc-1">
	<a href="chitiettintuc.php?matintuc=<?php echo $row['id_tin_tuc']?>">
	<img id="img-tin-tuc" src="images/tin-tuc/<?php echo $row['anh'];?>">
	<div style="float:left">
		<div class="header-tin-tuc"><?php echo $row['tieu_de']?></div>
		<div style="font-size: 13px; font-style: italic;margin-left:10px;">@<?php echo $row['tac_gia'];?></div>
		<div style="font-size: 13px; font-style: italic;margin-left:10px;"><?php echo $row['add_date'];?></div>
		<div style="font-size: 17px;margin-left:10px;width=80%"><?php echo $row['tom_tat'];?> ...</div>
		<?php
			$sql1= "Select COUNT(id_tin_tuc) AS so_binh_luan FROM tbl_binh_luan WHERE id_tin_tuc='".$row['id_tin_tuc']."'";
			$result1=$con->query($sql1);
			$row1=$result1->fetch_assoc();
		?>
		<div style="font-size: 13px; font-style: italic;margin-left:10px;"><i class="fa fa-commenting-o"></i> <?php echo $row1['so_binh_luan'] ?> bình luận </div>
	</div>
	</a>
</div>
<?php
	if($i%3==2)
	{
?> <!--div đóng của row-->

<?php 
	}//end if
	$i++;
}//end while
}//if_num_row
?>
</div>
</div>
</div>
</div>
<div id="trang">
		<!--Tinh duoc so trang-->
		<?php 
			$sqlsum="Select * from tbl_tin_tuc";
	  		$result=$con->query($sqlsum);
	  		$tongsb=$result->num_rows;
	  		$tongsotrang=ceil($tongsb/$sbmoitrang);
	  		$j=1;
	  		while($j<=$tongsotrang)
	  		{
	  			$str= "<a href='tintuc.php?";
	  			$str.="&trang=".$j."'>".$j."</a> ";

	  			echo $str;
	  			$j++;
				//tong so ban ghi
	  		}

		?>
</div>
</section>



<?php
	include("layout/footer.php");
	include("layout/cacnut.php");
?>
</body>
</html>