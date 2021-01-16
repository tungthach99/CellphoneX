<div class="boLoc" style="">
	<nav class="nav-menu">
		<ul>
			<li style="font-size: 24px; cursor: auto"><i class="fa fa-sliders"></i></li>
			<li class="drop-down"><a class="nav1">Thương hiệu&nbsp;<i class="fa fa-sort-desc"></i></a>
<!--				Lọc theo thương hiệu-->
        		<ul>
					<li><?php
						if(isset($_GET["th1"]) and $_GET["th1"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&th1=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="checkbox"> Apple</a>
						<?php
						}
						else
						{
						?>
							<a class="nav1" href="sanpham.php?&th1=1<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="checkbox"> Apple</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["th2"]) and $_GET["th2"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&th2=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="checkbox"> SamSung</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&th2=1<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="checkbox"> SamSung</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["th3"]) and $_GET["th3"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&th3=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="checkbox"> Oppo</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&th3=1<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="checkbox"> Oppo</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["th4"]) and $_GET["th4"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&th4=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="checkbox"> Khác</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&th4=1<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="checkbox"> Khác</a>
						<?php
						}
						?>
					</li>
				</ul>
<!--				Lọc theo thương hiệu: end.-->
			</li>
			<li class="drop-down"><a class="nav1" href="khuyenmai.php">Giá&nbsp;<i class="fa fa-sort-desc"></i></a>
<!--				Lọc theo Giá-->
        		<ul>
					<li><?php
						if(isset($_GET["g"]) and $_GET["g"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&g=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="khoangGia"> Dưới 4,000,000</a>
						<?php
						}
						else
						{
						?>
							<a class="nav1" href="sanpham.php?&g=1<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="khoangGia"> Dưới 4,000,000</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["g"]) and $_GET["g"]==2)
						{
						?>
							<a class="nav1" href="sanpham.php?&g=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="khoangGia"> 4,000,000 - 10,000,000</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&g=2<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="khoangGia"> 4,000,000 - 10,000,000</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["g"]) and $_GET["g"]==3)
						{
						?>
							<a class="nav1" href="sanpham.php?&g=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="khoangGia"> 10,000,000 - 15,000,000</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&g=3<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="khoangGia"> 10,000,000 - 15,000,000</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["g"]) and $_GET["g"]==4)
						{
						?>
							<a class="nav1" href="sanpham.php?&g=0<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="khoangGia"> Trên 15,000,000</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&g=4<?php
							if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="khoangGia"> Trên 15,000,000</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["tt"]) and $_GET["tt"]==1)
						{
						?>
							<a class="nav1" href="sanpham.php?&tt=0<?php
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="thuTu"> <i class="fa fa-sort-numeric-asc"></i> Tăng dần</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&tt=1<?php
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="thuTu"> <i class="fa fa-sort-numeric-asc"></i> Tăng dần</a>
						<?php
						}
						?>
					</li>
					<li><?php
						if(isset($_GET["tt"]) and $_GET["tt"]==2)
						{
						?>
							<a class="nav1" href="sanpham.php?&tt=0<?php
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
							if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
							if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
							if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input checked type="radio" name="thuTu"> <i class="fa fa-sort-numeric-desc"></i> Giảm dần</a>
						<?php
						}
						else
						{
						?>
						<a class="nav1" href="sanpham.php?&tt=2<?php
							if(isset($_GET["g"])) echo "&g=".$_GET["g"];
							if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
							if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
							if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
							if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
						if(isset($_GET["maloai"])) echo "&maloai=".$_GET["maloai"];
						if(isset($_GET["trang"])) echo "&trang=".$_GET["trang"];
						if(isset($_GET["tensanpham"])) echo "&tensanpham=".$_GET["tensanpham"];
						?>"><input type="radio" name="thuTu"> <i class="fa fa-sort-numeric-desc"></i> Giảm dần</a>
						<?php
						}
						?>
					</li>
				</ul>
<!--				Lọc theo giá: end.-->
			</li>
		</ul>
	</nav>
</div>
<div id="product-content">
<?php 
	$sbmoitrang=8;
	$sql="Select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham";
	
	if (isset($_GET["maloai"]) or isset($_GET["tensanpham"])) $sql.= " WHERE";
	if (isset($_GET["maloai"])) $sql.= " id_danh_muc='".$_GET["maloai"]."'";

	if (isset($_GET["tensanpham"])) $sql.= " ten_san_pham like '%".$_GET["tensanpham"]."%'";
	
//	Bo loc
	if (isset($_GET["maloai"]) or isset($_GET["tensanpham"]))
	{
		if((isset($_GET["th1"]) and $_GET["th1"]!=0) or (isset($_GET["th2"]) and $_GET["th2"]!=0) or (isset($_GET["th3"]) and $_GET["th3"]!=0) or (isset($_GET["th4"]) and $_GET["th4"]!=0))
		{
			$sql.=" AND id_thuong_hieu IN(";
			if(isset($_GET["th1"]) and $_GET["th1"]==1) $sql.="1,";
			else $sql.="0,";
			if(isset($_GET["th2"]) and $_GET["th2"]==1) $sql.="2,";
			else $sql.="0,";
			if(isset($_GET["th3"]) and $_GET["th3"]==1) $sql.="3,";
			else $sql.="0,";
			if(isset($_GET["th4"]) and $_GET["th4"]==1) $sql.="4,5,6,7";
			else $sql.="0";
			$sql.=")";
		}
		if(isset($_GET["g"]))
		{
			if($_GET["g"]==1) $sql.=" AND don_gia<4000000";
			if($_GET["g"]==2) $sql.=" AND (don_gia<10000000 AND don_gia>=4000000)";
			if($_GET["g"]==3) $sql.=" AND (don_gia<15000000 AND don_gia>=10000000)";
			if($_GET["g"]==4) $sql.=" AND don_gia>15000000";
		}
		if(isset($_GET["tt"]))
		{
			if($_GET["tt"]==1) $sql.=" ORDER BY don_gia ASC";
			if($_GET["tt"]==2) $sql.=" ORDER BY don_gia DESC";
		}
	}
//	Bo loc:end.
	
	
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

?>
		<div id="product-1">
		<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><img style="margin-top: 10px;" id="product-img" src="images/san-pham/<?php echo $row['anh']; ?>"></a>
<!--			san pham yeu thich-->
		<?php
		if (isset($_SESSION["id-user"]))
		{
			$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$row["id_san_pham"]."'";
			$resultyt=$con->query($sqlcheckyeuthich);
			if($resultyt->num_rows>0)
			{
		?>
		<a class="heart" class="heart" title="Yêu thích" href="customer/Product/xlxoasanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart" title="Bỏ thích"></i>
		</a>
		<?php
			}
			else
			{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart-o" title="Yêu thích"></i>
		</a>
		<?php
			}
		}
		else
		{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-heart-o" title="Yêu thích"></i>
		</a>
		<?php
		}
		?>
<!--			san pham yeu thich: end.-->
		<p id="title-product-1"><?php echo $row["ten_san_pham"];?></p>
		<?php
			if (isset($row["muc_khuyen_mai"]))
			echo "<p id='title-product-2'>Giá: ".number_format($row["gia_moi"]).
			"đ <span style='font-size:12px; color:#2c3e50; text-decoration: line-through'>".number_format($row["don_gia"])."đ</span></p>";
			else
			echo  "<p id='title-product-2'>Giá: ".number_format($row["don_gia"])."đ </p>";
		?>
		<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><button class="nutChiTiet">Chi tiết
		</button></a>
		</div>
		<!--product=1=>product_detail.php-->
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
</div> <!-- product-content -->
<div id="trang">
		<!--Tinh duoc so trang-->
		<?php 
			$sqlsum="Select * from tbl_san_pham";
	  		if (isset($_GET["maloai"]))
	  			$sqlsum.= " where id_danh_muc='".$_GET["maloai"]."'";
			if (isset($_GET["tensanpham"]))
				$sqlsum.= " where ten_san_pham like '%".$_GET["tensanpham"]."%'";
			
			if (isset($_GET["maloai"]) or isset($_GET["tensanpham"]))
	{
		if((isset($_GET["th1"]) and $_GET["th1"]!=0) or (isset($_GET["th2"]) and $_GET["th2"]!=0) or (isset($_GET["th3"]) and $_GET["th3"]!=0) or (isset($_GET["th4"]) and $_GET["th4"]!=0))
		{
			$sqlsum.=" AND id_thuong_hieu IN(";
			if(isset($_GET["th1"]) and $_GET["th1"]==1) $sqlsum.="1,";
			else $sqlsum.="0,";
			if(isset($_GET["th2"]) and $_GET["th2"]==1) $sqlsum.="2,";
			else $sqlsum.="0,";
			if(isset($_GET["th3"]) and $_GET["th3"]==1) $sqlsum.="3,";
			else $sqlsum.="0,";
			if(isset($_GET["th4"]) and $_GET["th4"]==1) $sqlsum.="4,5,6,7";
			else $sqlsum.="0";
			$sqlsum.=")";
		}
		if(isset($_GET["g"]))
		{
			if($_GET["g"]==1) $sqlsum.=" AND don_gia<4000000";
			if($_GET["g"]==2) $sqlsum.=" AND (don_gia<10000000 AND don_gia>=4000000)";
			if($_GET["g"]==3) $sqlsum.=" AND (don_gia<15000000 AND don_gia>=10000000)";
			if($_GET["g"]==4) $sqlsum.=" AND don_gia>15000000";
		}
	}
	
	  		$result=$con->query($sqlsum);
	  		$tongsb=$result->num_rows;
	  		$tongsotrang=ceil($tongsb/$sbmoitrang);
	  		$j=1;
			if($tongsotrang>1)
			{
	  			while($j<=$tongsotrang)
	  			{
					$str= "<a href='sanpham.php?";
	  				if(isset($_GET["maloai"])) $str.="&maloai=".$_GET["maloai"];
					if(isset($_GET["tensanpham"])) $str.="&tensanpham=".$_GET["tensanpham"];
					if(isset($_GET["th1"])) $str.="&th1=".$_GET["th1"];
					if(isset($_GET["th2"])) $str.="&th2=".$_GET["th2"];
					if(isset($_GET["th3"])) $str.="&th3=".$_GET["th3"];
					if(isset($_GET["th4"])) $str.="&th4=".$_GET["th4"];
					if(isset($_GET["g"])) $str.="&g=".$_GET["g"];
					if(isset($_GET["tt"])) $str.="&tt=".$_GET["tt"];
	  				$str.="&trang=".$j."'>".$j."</a> ";
	  				echo $str;
	  				$j++;
				//tong so ban ghi
	  			}
			}

		?>
</div>
