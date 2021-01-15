<div style="position: sticky;top: 75px;width: 250px;">
		
		<ul class="list-group" style="margin-left: 25px; padding-right: 0;">
		<p id="danh-muc-left-menu"><i class="material-icons" style="font-size: 25px;">devices</i> DANH MỤC</p>
		<?php $sql="Select * from tbl_danh_muc	";
	  		$result=$con->query($sql);
	  		
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
		<li class="list-group-item list-group-item-success list-san-pham" id="list-left-menu"><a class="aa" href="sanpham.php?&maloai=<?php
			echo $row['id_danh_muc'];
			if(isset($_GET["th1"])) echo "&th1=".$_GET["th1"];
			if(isset($_GET["th2"])) echo "&th2=".$_GET["th2"];
			if(isset($_GET["th3"])) echo "&th3=".$_GET["th3"];
			if(isset($_GET["th4"])) echo "&th4=".$_GET["th4"];
			if(isset($_GET["g"])) echo "&g=".$_GET["g"];
			if(isset($_GET["tt"])) echo "&tt=".$_GET["tt"];
			?>"><?php echo $row["ten_danh_muc"]; ?> <span style="margin-left: 5px;float:right; padding-right: 5px;"><i class='fa fa-forward'></i></span></a></li>
		<?php
			}//end_while
			} //end if

		?>
		</ul> 
</div>