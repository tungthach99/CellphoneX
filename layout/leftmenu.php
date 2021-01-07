<div id="sidebar" style="position: fixed;margin: 50px 0 0 10px;">
		
		<ul class="list-group" style="margin-left: 25px; padding-right: 0;">
		<p id="danh-muc-left-menu"><i class="material-icons" style="font-size: 25px;">devices</i> DANH MỤC</p>
		<?php $sql="Select * from tbl_danh_muc	";
	  		$result=$con->query($sql);
	  		
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
		<li class="list-group-item list-group-item-success list-san-pham" id="list-left-menu"><a href="sanpham.php?&maloai=<?php  echo $row['id_danh_muc']; ?>"><?php echo $row["ten_danh_muc"]; ?> <span style="margin-left: 5px;float:right; padding-right: 5px;"><i class='fas fa-angle-double-right'></i></span></a></li>
		<?php
			}//end_while
			} //end if

		?>
		</ul> 
</div>