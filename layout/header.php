<header  id="header" class="fixed-top">
		<form name="box-tim-kiem" action="#" id="box-tim-kiem">
			<span><input type="submit" value="Search" id="nut-tim-kiem"></span>
			<span><input name="sanpham" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm sản phẩm..."></span>
			<span><a style="cursor: pointer" onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem"><i class="fa fa-close"></i></a></span>
		</form>
		<div class="row" style="width: 100%;">
			<span class="col-sm-3 d-flex" style="margin-left: 2%;">
				<nav class="nav-menu">
				<ul>
					<li class="drop-down"><a><i class="fa fa-navicon d-flex" style="font-size: 28px; color: #fafafa;"></i></a>
           		     		<ul>
                 				<li><a href="dienthoai.html">Điện thoại</a></li>
                  				<li><a href="maytinhbang.html">Máy tính bảng</a></li>
                  				<li><a href="dongho.html">Đồng hồ</a></li>
                  				<li><a href="tainghe.html">Tai nghe</a></li>
								<li><a href="khuyenmai.html">Khuyến mại</a></li>
         	       			</ul>
           		   	</li>	
				</ul>
				</nav>
				<a href="home.html"><img id="logo-X" src="images/20.png" alt="img"></a>&nbsp;&nbsp;&nbsp;
				<span class="d-none d-lg-block logo-chu">
					<a href="home.html">CellphoneX</a>
				</span>
				
			</span>
			<span class="col-sm-6 d-flex">
				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<li><a href="dienthoai.html">Điện thoại</a></li>
						<li><a href="maytinhbang.html">Máy tính bảng</a></li>
						<li><a href="dongho.html">Đồng hồ</a></li>
						<li><a href="tainghe.html">Tai nghe</a></li>
						<li><a href="khuyenmai.html">Khuyến mại</a></li>
              			<li><a href="tintuc.html">Tin tức</a></li>
            		</ul>
          		</nav><!-- .nav-menu -->
        	</span>
			<span class="col-sm-2 d-flex" style="margin-left: 2%;">
          		<nav class="nav-menu d-none d-lg-block">
					<ul>
<!--
						<li><a href="hotro.html">Hỗ trợ</a></li>
						<li class="drop-down">
							<span></span><a href="">Chúng tôi &darr;</a>
           		    	 	<ul>
								<li><a href="gioithieu.html">Giới thiệu</a></li>
								<li><a href="lienhe.html">Liên hệ</a></li>
								<li><a href="dieukhoan.php">Điều khoản</a></li>
								<li><a href="chinhsach.php">Chính sách</a></li>
         	       			</ul>
           		   		</li>
-->
						<?php if(!isset($_SESSION["user"])){?>
      						<li class="drop-down"><a onClick="hienthiform('formDangNhap'),dongform('formGioHang')"><img width="30px;" height="30px;" src="../images/20 - Copy.png">Đăng nhập</a>
           		   			</li>
      					<?php }?>
						
						<?php if(isset($_SESSION["user"])){?>
      						<li class="drop-down"><a onClick="hienthiform('formDangNhap'),dongform('formGioHang')"><img width="30px;" height="30px;" src="../images/20 - Copy.png"><?php echo $_SESSION["user"];?></a>
           		   			</li>
      					<?php }?>
						
						<li class="drop-down"><a style="cursor: pointer"><i class="fa fa-shopping-cart d-flex" style="font-size: 28px; color: #fafafa;" onClick="hienthiform('formGioHang'),dongform('formDangNhap')"></i></a> 	
           		   		</li>
						<li>
							<a style="cursor: pointer" onClick="hienthiform('box-tim-kiem');"><i class="fa fa-search d-flex" style="font-size: 28px; color: #fafafa;"></i></a>
						</li>
					</ul>
				</nav>
			</span>
		</div>
	</header>