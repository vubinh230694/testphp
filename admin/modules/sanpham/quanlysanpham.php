	<?php 
		if(!isset($baomat)){exit();}
	?>
	<?php 
		if(!isset($_GET['id_menu']))
		{
			$id_menu="toan_bo_san_pham";
		}else{
			if($_GET['id_menu']!="" and $_GET['id_menu']!="toan_bo_san_pham")
		{
			$id_menu=$_GET['id_menu'];
		}else {
			$id_menu="toan_bo_san_pham";
		}
		}
	?>
	<div class="container"> 
		<div class="quanly">
			<h1><b>DANH SÁCH SẢN PHẨM</b></h1>
			<div class="quanly-chon">
				<select name="name" onchange="window.location='?action=quanlysanpham&id_menu='+this.value" >
					<option value="" >Tất cả sản phẩm</option>
					<?php 
						$sql="select * from danhmucsanpham order by id ";
						$result=mysql_query($sql);
						$chon="";
						while($row=mysql_fetch_array($result))
						{
							$ten=$row['name'];
							$id=$row['id'];
							if($id_menu==$id)
							{
								$chon="selected";
							}
							echo "<option value='$id' $chon >";
							echo $ten;
							echo "</option>";
							$chon="";
						}
					?>
				</select>
			</div> 
			<div class="quanly-them">
				<a href="?action=themsanpham" >
					<button>
						Thêm sản phẩm
					</button> 
				</a>
			</div>
			
	<?php 
		$size=10;
		if(!isset($_GET['trang'])){$_GET['trang']=1;}

		if($id_menu=="toan_bo_san_pham")
		{
			$sql="select count(*) from sanpham";
		}else {
			$sql="select count(*) from sanpham where thuocdanhmuc='$id_menu' ";
		}
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$page=ceil($row[0]/$size);
		$start=($_GET['trang']-1)*$size;
		if($id_menu=="toan_bo_san_pham")
		{
			$sql="select id,tensp,gia,hinhanh from sanpham order by id desc limit $start,$size";
		}else {
			$sql="select id,tensp,gia,hinhanh from sanpham where thuocdanhmuc='$id_menu' order by id desc limit $start,$size";
		}
		$result=mysql_query($sql);
	?>
			<table class="table table-striped table-bordered table-list"> 
				<thead> 
					<tr> 
						<th>
							<a>
								<span class="glyphicon glyphicon-cog"></span>
							</a>
						</th> 
						<th>Mã số</th> 
						<th>Hình ảnh</th> 
						<th>Tên sản phẩm</th> 
						<th>Giá</th> 
					</tr> 
				</thead> 
				<?php 
				while($row=mysql_fetch_array($result))
				{
					$id=$row['id'];
					$ten=$row['tensp'];
					$gia=$row['gia'];
					$link_hinh="../img-sanpham/".$row['hinhanh'];
					$link_sua="?action=suasanpham&id_menu=".$id_menu."&id=".$id."&trang=".$_GET['trang'];
					$link_xoa="?xoasanpham=co&id=".$id;
				?>			
				<tr> 
					<td align="center">
						<a class="btn btn-default" href="<?php echo $link_sua; ?>">
							<span class="glyphicon glyphicon-pencil"></span>
						</a> 
						<a class="btn btn-danger" onclick = "return confirm('Bạn có thực sự muốn xóa sản phẩm này')" href="<?php echo $link_xoa; ?>">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td> 
					<td >
						<?php echo $row['id']; ?>
					</td> 
					<td>
						<img src="<?php echo $link_hinh; ?>" class="img-sanpham" width="150px" height="150px">
					</td> 
					<td class="td-ten">
						<p><?php echo $ten; ?></p>
					</td> 
					<td>
						<b><?php echo $gia; ?>đ</b>
					</td> 
				</tr> 

				<?php 
				}
				?>
			</table> 
			<div class="phantrang">
				<?php 
				for($i=1;$i<=$page;$i++)
				{
					$link_phan_trang="?action=quanlysanpham&id_menu=".$id_menu."&trang=".$i;
					echo "<a href='$link_phan_trang' >";
					echo "<button>$i</button>";
					echo "</a> ";
				}
				?>
			</div>
		</div>
	</div>
