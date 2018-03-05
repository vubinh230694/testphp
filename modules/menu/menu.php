<ul id="header_links" class="toggle-footer">
	<li>
		<a href="index.php" title="Trang chủ">Trang Chủ</a>
	</li>

	<?php 
		$sql="select * from danhmucsanpham order by id limit 0,3";
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{?>			
			<li>
				<a href="?action=hienthisanpham&id=<?php echo $row['id'] ?>" title="<?php echo $row["name"] ?>"><?php echo $row["name"] ?>
				</a>
			</li>
		<?php }
	?>
	<li>
		<a href="" title="Giới thiệu">Giới thiệu</a>
	</li>
	<li>
		<a href="" title="Liên hệ">Liên hệ</a>
	</li>
</ul>	