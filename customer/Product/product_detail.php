<?php
$sql="select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT OUTER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
$sql2="select * from tbl_san_pham,tbl_phien_ban_san_pham,tbl_phien_ban where tbl_san_pham.id_san_pham=tbl_phien_ban_san_pham.id_san_pham AND tbl_phien_ban_san_pham.id_phien_ban=tbl_phien_ban.id_phien_ban AND tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
	?>
<div class="row">
	<div id="product_detail">
		<span id="left_product">
		<img style="cursor: pointer" src="images/san-pham/<?php echo $row['anh'];?>" onClick="zoom(this)">
		<p><i class="material-icons">remove_red_eye</i> Click vào ảnh để xem thêm</p>
		<form action="customer/Order/xlthemgiohang.php?&masanpham=<?php echo $_GET['masanpham'];?>" method="get">
			Số lượng: <input name="soluong" type="number" value="0" max="<?php echo $row["so_luong"];?>" min="1">
			<br>
			Phiên bản: <br>
			<?php
			$dem=0;
			$result2=$con->query($sql2);
			while($row2=$result2->fetch_assoc())
			{
				$dem++;
				?>
				<input required value="<?php echo $row2["id_phien_ban"];?>" type="radio" id="phienban<?php echo $dem?>" name="phienban" >
				<label for="phienban<?php echo $dem?>"><b><?php echo $row2["dung_luong"];?>: Còn <?php echo $row2["so_luong_ton"];?> sp</b>
				</label><br>
				<?php
			}
			?>
			<input name="masanpham" type="text" style="display: none;" value="<?php echo $_GET['masanpham'] ?>"><br>
			<button type="submit" class="btn-mua btn btn-success">Đặt hàng <i class='fa fa-cart-plus'></i>
			</button>
			<btn class="btn btn-primary">Chia sẻ <i class="fa fa-share-alt"></i></btn>
		</form>
		</span>
		<span id="right_product">
			<p id="title-detail-product-1"><?php echo $row["ten_san_pham"];?></p>
			<?php
			if (isset($row["muc_khuyen_mai"]))
			echo  "<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["gia_moi"]).
			"đ <span style=' font-size: 18px;'>Giá niêm yết: </span><span style='color:#2c3e50; text-decoration: line-through; font-size: 18px;'>".number_format($row["don_gia"])."đ</span></div>";
			else
			echo "<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["don_gia"])."đ</div>";
			?>
			
			<div id="header-detail-product">MÔ TẢ SẢN PHẨM</div>
			<p id="title-detail-product-3"><?php echo $row["mo_ta"];?></p>
		</span>
	</div>
</div>
<div style="width: 100%; height: 200px;"></div>
<!-- Binh luan  -->
<form action="xlbinhluansp	.php" method="POST">
		<div class="binh-luan-group">
        	<p id="binh-luan-label">Viết bình luận ...<i class="fa fa-pencil"></i></p>
			<input type="text" id="comment-box" name="noi_dung" placeholder="Hãy nhập bình luận của bạn ở đây"> </input>
			<button type="submit"  class="btn btn-primary" style="margin: 0 0 10px 5%;">Gửi</button>
			<input type="text" style="display: none;" name="ma_san_pham" value="<?php echo $row['id_san_pham']?>">
		</div>
		</form>
		<div style="margin: 15px 0 10px 0;width: 100%;border-bottom: 2px solid var(--light);"></div>
<?php
$sql3="select * from tbl_binh_luan_sp where id_san_pham='".$_GET['masanpham']."' order by ngay_tao DESC";
$result3=$con->query($sql3);
if($result->num_rows>0)
	{
	while($row3=$result3->fetch_assoc())
	{
?>
		<div class="hien-thi-binh-luan">
			<div class="hien-thi-ten"><?php echo $_SESSION["ten-user"]?><span class="hien-thi-ngay"><?php echo $row3['ngay_tao']?></span></div>
			<div class="hien-thi-noi-dung" value= null><?php echo $row3['noi_dung']?></div>
			<div style="margin: 10px 0 10px 0;width: 90%;border-bottom: 2px solid var(--light);"></div>
		</div>
<?php
	}//end_while	
	} //end if
?>
</form>
<!-- Binh luan end   -->
<div style="width: 100%; height: 500px;"></div>
