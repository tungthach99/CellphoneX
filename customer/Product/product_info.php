<div style="margin-top 30px;">
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
	<div class="product">
		<div id="product-1">
		<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><img id="product-img" src="images/san-pham/<?php echo $row['anh']; ?>"></a>
		<a id="heart-2"><i  class="fa fa-heart heart" style="color:red;"></i></a>
		<p id="title-product-1"><?php echo $row["ten_san_pham"];?></p>
		<p id="title-product-2">Giá: <?php echo $row["don_gia"];?> đ</p>
		<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><button class="btn btn-dark" style="margin-left: 5px;">Chi tiết  <i class='fas fa-clipboard-list'></i>
		</button></a>
		<button class="btn btn-dark" style="float:right; margin-right:5px;">Mua  <i class='fas fa-cart-plus'></i></button>
		</div>
		<!--product=1=>product_detail.php-->
		</p>
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
</div> <!-- product-content -->
<div id="trang">
		<!--Tinh duoc so trang-->
		<?php 
			$sqlsum="Select * from tbl_san_pham";
	  		if (isset($_GET["maloai"]))
	  			$sqlsum.= " where id_danh_muc='".$_GET["maloai"]."'";
	  		$result=$con->query($sqlsum);
	  		$tongsb=$result->num_rows;
	  		$tongsotrang=ceil($tongsb/$sbmoitrang);
	  		$j=1;
	  		while($j<=$tongsotrang)
	  		{
	  			$str= "<a href='sanpham.php?";
	  			if(isset($_GET["maloai"]))
	  			{
	  				$str.="&maloai=".$_GET["maloai"];
	  			}
	  			$str.="&trang=".$j."'>".$j."</a> ";

	  			echo $str;
	  			$j++;
				//tong so ban ghi
	  		}

		?>
</div>
