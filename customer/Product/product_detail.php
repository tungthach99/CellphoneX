<?php
$sql="select * from tbl_san_pham where id_san_pham='".$_GET['masanpham']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
	?>
<div class="row">
	<div id="product_detail">
		<div id="left_product">
		<img style="cursor: pointer" src="images/san-pham/<?php echo $row['anh'];?>" onClick="zoom(this)">
		<p><i class="material-icons">remove_red_eye</i> Click vào ảnh để xem thêm</p>
		<p><a href="customer/Order/xlthemgiohang.php?&masanpham=<?php echo $_GET['masanpham'];?>" class="btn-mua btn btn-success">Đặt hàng <i class='fas fa-cart-plus'></i>
		</a><btn class="btn btn-primary">Chia sẻ <i class="fa fa-share-alt"></i></btn></p>
		</div>
		<div id="right_product">
			<p id="title-detail-product-1"><?php echo $row["ten_san_pham"];?></p>
			<p id="title-detail-product-2"> Giá sp: <?php echo $row["don_gia"];?> đ</p>
			<p > Số lượng tồn: <?php echo $row["so_luong"];?> sp</p>
			<div id="header-detail-product">MÔ TẢ SẢN PHẨM</div>
			<p id="title-detail-product-3"><?php echo $row["mo_ta"];?></p>
		</div>
	</div>
</div>
<div style="width: 100%; height: 500px;"></div>