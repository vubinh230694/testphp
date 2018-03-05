<div class="row">
	<?php 
		$sql="select id,tensp,hinhanh,gia from sanpham where noibat='co' order by id  limit 0,4";
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{?>
			<div class="col-lg-3 col-md-3">
				<div class="one-content">
				    <input type="submit" value="Hot">
				    <div class="img-phukien">
						<a href="?action=chitietsanpham&id= <?php echo $row['id'] ?>">
						<img src="img-sanpham/<?php echo $row["hinhanh"] ?>"  width="100%" height="auto"></a>
					</div>
					<div class="name-phukien">						
						<label><?php echo $row["tensp"] ?></label>
						<section> <?php echo $row['gia'] ?>đ</section>       
					</div>
					<div class="label">

					</div>
				</div>
			</div>
		<?php }
	?>
</div>
