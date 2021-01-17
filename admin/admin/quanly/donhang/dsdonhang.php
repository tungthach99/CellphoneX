<?php 
	//Hiển thị danh sách đơn hàng
      $sql="SELECT *
      FROM tbl_don_hang t1";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách đơn hàng </h1>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Ngày đặt</th>
	        <th scope="col">Tổng tiền</th>
	        <th scope="col">Khách hàng</th>
	        <th scope="col">Địa chỉ nhận hàng</th>
	        <th scope="col">Hình thức mua hàng</th>
	        <th scope="col">Ghi chú</th>
	        <th scope="col">Trạng thái</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
	        	<td><?php echo $row['ngay_dat']; ?></td>
	        	<td><?php echo $row['tong_tien']; ?></td>
	        	<td><?php echo $row['ten_khach_hang']; ?></td>
	        	<td><?php echo $row['dia_chi_nhan_hang']; ?></td>
	        	<td><?php echo $row['hinh_thuc_mua_hang']; ?></td>
	        	<td><?php echo $row['ghi_chu']; ?></td>
	        	<td><?php echo $row['trang_thai']; ?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=donhang/chitietdonhang&id=<?php echo $row['id_don_hang']?>">Xem</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>