<?php
<<<<<<< Updated upstream
$sql="select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT OUTER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
=======
<<<<<<< HEAD
$sql="select * from tbl_san_pham where id_san_pham='".$_GET['masanpham']."'";
$sql2="select * from tbl_san_pham,tbl_phien_ban_san_pham,tbl_phien_ban where tbl_san_pham.id_san_pham=tbl_phien_ban_san_pham.id_san_pham AND tbl_phien_ban_san_pham.id_phien_ban=tbl_phien_ban.id_phien_ban AND tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
=======
$sql="select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT OUTER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
>>>>>>> 8abc0da2bc52ee9d8aba2416910f01d036d6bb61
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
			<p id="title-detail-product-2"> Giá sp: <?php echo number_format($row["don_gia"]);?> đ</p>
<!--			<p > Số lượng tồn: <?php echo number_format($row["so_luong"]);?> sp</p>-->
=======
>>>>>>> Stashed changes
			<?php
			if (isset($row["muc_khuyen_mai"]))
			echo  "<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["gia_moi"]).
			"đ <span style=' font-size: 18px;'>Giá niêm yết: </span><span style='color:#2c3e50; text-decoration: line-through; font-size: 18px;'>".number_format($row["don_gia"])."đ</span></div>";
			else
			echo "<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["don_gia"])."đ</div>";
			?>
			<p > Số lượng tồn: <?php echo number_format($row["so_luong"]);?> sp</p>
>>>>>>> 8abc0da2bc52ee9d8aba2416910f01d036d6bb61
			<div id="header-detail-product">MÔ TẢ SẢN PHẨM</div>
			<p id="title-detail-product-3"><?php echo $row["mo_ta"];?></p>
		</span>
	</div>
</div>
<div style="width: 100%; height: 500px;"></div>