<div id="formGioHang">
<form action="customer/Order/xldathang.php" method="post" style="text-align: left">
	<?php
	if(isset($_SESSION["id-user"]))
	{
		$sql="select * from tbl_khach_hang where id_khach_hang =  ".$_SESSION["id-user"];
		$result=$con->query($sql);
		$row=$result->fetch_assoc();
	}
	?>
	<div class="row" style="width: 920px;">
	<div class="col-5" style="margin-left: 8%; margin-right: 5%;">
		<h3 style="margin-top: 5%; color: #b04dff">Thông tin giao hàng</h3>
		<div class="form-group">
    	<input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ và tên" required value="<?php
			   		if($result->num_rows>0)
					{
						echo $row["ten_khach_hang"];
					}
			   ?>">
		</div>
  		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="Email của bạn" value="<?php if($result->num_rows>0)
					{
						echo $row["email"];
					}?>">
  		</div>
		<div class="form-group">
			<input title="Nhập số điện thoại" type="text" class="form-control" name="sdt" placeholder="Số điện thoại" required value="<?php if($result->num_rows>0)
					{
						echo $row["so_dien_thoai"];
					}?>">
  		</div>
		<div class="form-group">
   			<select class="custom-select" id="validationCustom04" name="diachi">
        <option disabled value="-1">Chọn tỉnh/thành phố</option>
        <option value="1">Cần Thơ</option>
		<option value="1">Đà Nẵng</option>
		<option value="1">Hải Phòng</option>
		<option selected value="1">Hà Nội</option>
		<option value="1">TP HCM</option>
		<option value="An Giang">An Giang</option>
		<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
		<option value="Bắc Giang">Bắc Giang</option>
		<option value="Bắc Kạn">Bắc Kạn</option>
		<option value="Bạc Liêu">Bạc Liêu</option>
		<option value="Bắc Ninh">Bắc Ninh</option>
		<option value="Bến Tre">Bến Tre</option>
		<option value="Bình Định">Bình Định</option>
		<option value="Bình Dương">Bình Dương</option>
		<option value="Bình Phước">Bình Phước</option>
		<option value="Bình Thuận">Bình Thuận</option>
		<option value="Cà Mau">Cà Mau</option>
		<option value="Cao Bằng">Cao Bằng</option>
		<option value="Đắk Lắk">Đắk Lắk</option>
		<option value="Đắk Nông">Đắk Nông</option>
		<option value="Điện Biên">Điện Biên</option>
		<option value="Đồng Nai">Đồng Nai</option>
		<option value="Đồng Tháp">Đồng Tháp</option>
		<option value="Gia Lai">Gia Lai</option>
		<option value="Hà Giang">Hà Giang</option>
		<option value="Hà Nam">Hà Nam</option>
		<option value="Hà Tĩnh">Hà Tĩnh</option>
		<option value="Hải Dương">Hải Dương</option>
		<option value="Hậu Giang">Hậu Giang</option>
		<option value="Hòa Bình">Hòa Bình</option>
		<option value="Hưng Yên">Hưng Yên</option>
		<option value="Khánh Hòa">Khánh Hòa</option>
		<option value="Kiên Giang">Kiên Giang</option>
		<option value="Kon Tum">Kon Tum</option>
		<option value="Lai Châu">Lai Châu</option>
		<option value="Lâm Đồng">Lâm Đồng</option>
		<option value="Lạng Sơn">Lạng Sơn</option>
		<option value="Lào Cai">Lào Cai</option>
		<option value="Long An">Long An</option>
		<option value="Nam Định">Nam Định</option>
		<option value="Nghệ An">Nghệ An</option>
		<option value="Ninh Bình">Ninh Bình</option>
		<option value="Ninh Thuận">Ninh Thuận</option>
		<option value="Phú Thọ">Phú Thọ</option>
		<option value="Quảng Bình">Quảng Bình</option>
		<option value="Quảng Nam">Quảng Nam</option>
		<option value="Quảng Ngãi">Quảng Ngãi</option>
		<option value="Quảng Ninh">Quảng Ninh</option>
		<option value="Quảng Trị">Quảng Trị</option>
		<option value="Sóc Trăng">Sóc Trăng</option>
		<option value="Sơn La">Sơn La</option>
		<option value="Tây Ninh">Tây Ninh</option>
		<option value="Thái Bình">Thái Bình</option>
		<option value="Thái Nguyên">Thái Nguyên</option>
		<option value="Thanh Hóa">Thanh Hóa</option>
		<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
		<option value="Tiền Giang">Tiền Giang</option>
		<option value="Trà Vinh">Trà Vinh</option>
		<option value="Tuyên Quang">Tuyên Quang</option>
		<option value="Vĩnh Long">Vĩnh Long</option>
		<option value="Vĩnh Phúc">Vĩnh Phúc</option>
		<option value="Yên Bái">Yên Bái</option>
		<option value="Phú Yên">Phú Yên</option>
      </select>
 	 	</div>
		<div class="form-group">
			<input type="text" class="form-control" name="diaChiNhanHang" placeholder="Địa chỉ cụ thể nhận hàng" required>
		</div>
  		<div class="form-group">
    		<textarea class="form-control" name="ghichu" rows="3" placeholder="Ghi chú"></textarea>
  		</div>
	</div>
	<div class="col-5" style="background-color: #f4f6f7; border-radius: 25px;">
		<h3 style="margin-top: 5%;  color: #b04dff">Phương thức thanh toán</h3>
		<div class="form-check">
     		<label class="form-check-label" for="radio1">
        	<input type="radio" class="form-check-input" id="radio1" name="hinhthuc" value="option1" disabled>Thoanh toán thẻ (ATM nội địa, Visa, MasterCard)
      		</label>
    	</div>
    	<div class="form-check">
      		<label class="form-check-label" for="radio2">
        	<input type="radio" class="form-check-input" id="radio2" name="hinhthuc" value="option2" disabled>Thanh toán chuyển khoản
      		</label>
    	</div>
		<div class="form-check">
      		<label class="form-check-label" for="radio2">
        	<input type="radio" class="form-check-input" id="radio2" name="hinhthuc" value="option3" checked>Thanh toán khi nhận hàng (COD)
      		</label>
    	</div>
		<p>
			<br><br><br><br><br>
			<b>Phí vận chuyển: </b>
			<?php
			if($_SESSION["tongtien"]>600000 || $_SESSION["tongtien"]==0)
			{
				$_SESSION["phivanchuyen"]=0;
			}
			else 
			{
				$_SESSION["phivanchuyen"]=30000;
				$_SESSION["tongtien"]+=$_SESSION["phivanchuyen"];
			}
			echo $_SESSION["phivanchuyen"]?><b> VND</b><br>
			(Miễn phí cho đơn trên 600 000 VND)
		</p>
		<p style="font-size: 24px;">
			<b>TỔNG TIỀN: </b><b style="color: red"><?php echo $_SESSION["tongtien"] ?></b><b> VND</b>
		</p>
		<button style="padding: 10px 25px 10px 25px; background-color: #b04dff ;border: none; color: #fff;" type="submit"><b>HOÀN TẤT ĐƠN HÀNG</b></button>
		<a onClick="dongform('formGioHang')" style="padding: 10px 25px 10px 25px; background-color: rgba(148,137,137,0.1);border: none; color: #b04dff;"><b>ĐÓNG</b></a>
	</div>
</div>
</div>