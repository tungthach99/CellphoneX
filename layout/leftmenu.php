<div id="sidebar" style="position: fixed;margin: 50px 0 0 10px;">
		
		<ul class="list-group">
		<?php $sql="Select * from categories";
	  		$result=$con->query($sql);
	  		
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
		<li class="list-group-item list-group-item-success" id="list-left-menu"><a href="sanpham.php?&maloai=<?php  echo $row['maloai']; ?>"><?php echo $row["tenloai"]; ?> <span style="float:right; padding-right: 5px;"><i class='fas fa-angle-double-right'></i></span></a></li>
		<?php
			}//end_while
			} //end if

		?>
		</ul> 
</div>