<div id="product-content">
<?php 
	  $sbmoitrang=8;
	  $sql="Select * from tbl_san_pham";
	  if (isset($_GET["maloai"]))
	  	$sql.= " where id_danh_muc='".$_GET["maloai"]."'";
	
	//code tim kiem sp
	if (isset($_GET["tensanpham"]))
	  	$sql.= " where ten_san_pham like '%".$_GET["tensanpham"]."%'";
	//end tk.
	
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
		<p id="title-product-2">Giá: <?php echo number_format($row["don_gia"]);?> đ</p>
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
	  		$result=$con->query($sqlsum);
	  		$tongsb=$result->num_rows;
	  		$tongsotrang=ceil($tongsb/$sbmoitrang);
	  		$j=1;
			if($tongsotrang>1)
			{
	  			while($j<=$tongsotrang)
	  			{
					$str= "<a href='sanpham.php?";
	  				if(isset($_GET["maloai"]))
	  				{
	  					$str.="&maloai=".$_GET["maloai"];
	  				}
					if(isset($_GET["tensanpham"]))
	  				{
	  					$str.="&tensanpham=".$_GET["tensanpham"];
	  				}
	  				$str.="&trang=".$j."'>".$j."</a> ";

	  				echo $str;
	  				$j++;
				//tong so ban ghi
	  			}
			}

		?>
</div>
