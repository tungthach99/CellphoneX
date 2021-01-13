<header  id="header" class="fixed-top">
	<div id="box-tim-kiem">
		<form action="xlsearch.php" method="get">
			<label class="d-none d-lg-block">Nhập sản phẩm bạn cần tìm:</label>
			<input name="text-box-tim-kiem" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm sản phẩm..."><br>
			<button type="submit" id="nut-tim-kiem"><i class="fa fa-search"></i></button>
			<a onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem" title="Đóng"><i class="fa fa-close"></i></a>
		</form>
	</div>
		<div class="row" style="width: 100%;">
			<span class="col-sm-8 d-flex">
				<a href="home.php"><img id="logo-X" src="images/20 - Copy (2).png" alt="img"></a>
<!--
				<span class="d-none d-lg-block logo-chu">
					<a href="home.php">CellphoneX</a>
				</span>
-->
				<nav class="nav-menu">
					<ul>
						<li class="drop-down"><a href="sanpham.php?&tensanpham=" class="nav1">Sản phẩm&nbsp;<i class="fa fa-sort-desc"></i></a>
           		     		<ul>
                 				<li><a class="nav1" href="sanpham.php?&maloai=L01">Điện thoại</a></li>
                  				<li><a class="nav1" href="sanpham.php?&maloai=L02">Máy tính bảng</a></li>
                  				<li><a class="nav1" href="sanpham.php?&maloai=L03">Đồng hồ</a></li>
                  				<li><a class="nav1" href="sanpham.php?&maloai=L04">Tai nghe</a></li>
								<li><a class="nav1" href="sanpham.php?&maloai=L05">Phụ kiện</a></li>
         	       			</ul>
           		   		</li>
						<li class=" d-none d-lg-block"><a class="nav1" href="khuyenmai.php">Khuyến mãi</a></li>
              			<li class=" d-none d-lg-block"><a class="nav1" href="tintuc.php">Tin tức</a></li>
            		</ul>
          		</nav><!-- .nav-menu -->
        	</span>
			<span class="col-sm-4 d-flex" style="padding-left: 6%;">
          		<nav class="nav-menu d-none d-lg-block">
					<ul>
						<?php if(!isset($_SESSION["userngan"])){?>
						<li style="margin-left: 23%;"><a class="nav1" href="yeuthich.php">Yêu thích</a></li>
      					<li class="drop-down"><i class="fa fa-user" style="font-size: 34px; color: #000;" onClick="hienthiform('formDangNhap'),dongform('formGioHang')"></i>
           		   		</li>
      					<?php }?>
						
						<?php if(isset($_SESSION["userngan"])){?>
						<li><a class="nav1" href="yeuthich.php">Yêu thích</a></li>
      					<li class="drop-down"><span style="font-size: 20px;" onClick="hienthiform('formDangNhap'),dongform('formGioHang')"><img width="32px;" height="32px;" style="border-radius: 50%;" src="images/20 - Copy.png">&nbsp;<?php echo $_SESSION["userngan"];?></span>
           		   		</li>
      					<?php }?>
						
						<li style="cursor: pointer"><a href="giohang.php" class="fa fa-shopping-cart d-flex" style="font-size: 34px; color: #000;"></a>
           		   		</li>
						<li style="cursor: pointer">
							<i onClick="hienthiform('box-tim-kiem');" class="fa fa-search d-flex" style="font-size: 33px; color: #000;"></i>
						</li>
					</ul>
				</nav>
			</span>
		</div>
	</header>
<div style="height: 58px;">&nbsp;</div>