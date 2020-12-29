<?php
$sql="select * from product where masanpham='".$_GET['masanpham']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
	?>
<div id="row">
	<div id="col-sm-2"></div>
	<div id="col-sm-10">
	<div id="product_detail">
		<div id="left_product">
		<img src="images/san-pham/<?php echo $row['IDimage'];?>">
		</div>
		<div id="right_product">
			<p id="title-product-1"> Tên sp: <?php echo $row["tensanpham"];?></p>
			<p id="title-product-2"> Giá sp: <?php echo $row["gia"];?></p>
			<p id="title-product-1"> Số lượng: <?php echo $row["soluong"];?></p>
			<p><button class="btn btn-success">Đặt hàng</button><btn class="btn btn-primary">Chia sẻ</btn></p>
		</div>
	</div>
	</div>
</div>