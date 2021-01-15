<?php
$sql="select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT OUTER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
	?>
<div class="row">
	<div id="product_detail">
		<div id="left_product">
		<img style="cursor: pointer" src="images/san-pham/<?php echo $row['anh'];?>" onClick="zoom(this)">
		<p><i class="material-icons">remove_red_eye</i> Click vào ảnh để xem thêm</p>
		<form action="customer/Order/xlthemgiohang.php?&masanpham=<?php echo $_GET['masanpham'];?>" method="get">
			Số lượng: <input name="soluong" type="number" value="0" max="<?php echo $row["so_luong"];?>" min="1">
			<input name="masanpham" type="text" style="display: none;" value="<?php echo $_GET['masanpham'] ?>"><br>
			<button type="submit" class="btn-mua btn btn-success">Đặt hàng <i class='fa fa-cart-plus'></i>
			</button>
			<btn class="btn btn-primary">Chia sẻ <i class="fa fa-share-alt"></i></btn>
		</form>
		</div>
		<div id="right_product">
			<p id="title-detail-product-1"><?php echo $row["ten_san_pham"];?></p>
			<?php
			if (isset($row["muc_khuyen_mai"]))
			echo  "<div id='title-detail-product-2' style='color:#2c3e50; text-decoration: line-through'>Giá sản phẩm: ".number_format($row["don_gia"])."đ</div>".
			"<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["gia_moi"])."đ</div>";
			else
			echo "<div id='title-detail-product-2'>Giá sản phẩm: ".number_format($row["don_gia"])."đ</div>";
			?>
			<p > Số lượng tồn: <?php echo number_format($row["so_luong"]);?> sp</p>
			<div id="header-detail-product">MÔ TẢ SẢN PHẨM</div>
			<p id="title-detail-product-3"><?php echo $row["mo_ta"];?></p>
		</div>
	</div>
</div>
<div style="width: 100%; height: 500px;"></div>