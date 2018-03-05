
<div class="container">
	<div class="banner-danhmuc">
		<img src="img/banner-danhmuc.jpg">
		<img src="img/banner-danhmuc1.png">
	</div>
	<div class="label-bar">
		<label> DANH SÁCH SẢN PHẨM 	 </label>
	</div>
	<div class="row">
		<?php 
			$id=$_GET['id'];
			$size=12;
			$sql="select count(*) from sanpham where thuocdanhmuc='$id';";
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$page=ceil($row[0]/$size);
			if(!isset($_GET['trang'])){$start=0;}else{$start=($_GET['trang']-1)*$size;}
			$sql="select id,tensp,gia,hinhanh,thuocdanhmuc from sanpham where thuocdanhmuc='$id' order by id desc limit $start,$size";
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{?>
				<div class="col-lg-3 col-md-3">
					<div class="one-content">
					    <div class="img-phukien">
							<a href="?action=chitietsanpham&id=<?php echo $row['id'] ?>">
							<img src="img-sanpham/<?php echo $row["hinhanh"] ?>"  width="100%" height="auto"></a>
						</div>
						<div class="name-phukien">						
							<label><?php echo $row["tensp"] ?></label>
							<section> <?php echo $row["gia"] ?> đ</section>       
							
						</div>
						<div class="label">
						</div>
					</div>
				</div>
						
			<?php  
			}
			?>		
		</div>
	<?php 	
		echo "<div class='phantrang' >";
			for($i=1;$i<=$page;$i++)
			{
				$link="?action=hienthisanpham&id=".$_GET['id']."&trang=".$i;
					echo "<a href='$link' >  ";
					echo "<button>$i</button>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "</a>";
			}
		echo "</div>";

	?>
</div>
