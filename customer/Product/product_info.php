<div id="product-content">
<?php 
	  $sbmoitrang=9;
	  $sql="Select * from product";
	  if (isset($_GET["maloai"]))
	  	$sql.= " where maloai='".$_GET["maloai"]."'";
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
	<div class="row">
<?php 
	}//end if
?>
	<div class="product">
		<img id="product-img" src="images/san-pham/<?php echo $row['IDimage']; ?>">
		<p><?php echo $row["tensanpham"];?></p>
		<p> <?php echo $row["gia"];?></p>
		<p> <a href="sanpham.php?product=1&masanpham=<?php echo $row['masanpham']?>"> Chi tiết</a>
		<!--product=1=>product_detail.php-->
		</p>
	</div>
<?php
	if($i%3==2)
	{
?>
</div> <!--div đóng của row-->

<?php 
	}//end if
	$i++;
}//end while
}//if_num_row
?>
<div id="trang">
		<!--Tinh duoc so trang-->
		<?php 
			$sqlsum="Select * from product";
	  		if (isset($_GET["maloai"]))
	  			$sqlsum.= " where maloai='".$_GET["maloai"]."'";
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
	  			$str.="&trang=".$j."'>".$j."<a> ";

	  			echo $str;
	  			$j++;
				//tong so ban ghi
	  		}

		?>
</div>
</div>