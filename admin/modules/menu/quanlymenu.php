<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$size=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	$sql="select count(*) from danhmucsanpham";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$page=ceil($row[0]/$size);
	$start=($_GET['trang']-1)*$size;
	$sql="select * from danhmucsanpham order by id limit $start,$size";
	$result=mysql_query($sql);
?>
<div class="container"> 
		<div class="quanly">
			<h1><b>DANH SÁCH DANH MỤC</b></h1>
			<div class="quanly-them">
				<a href="?action=themmenu" >
					<button>
						Thêm danh mục
					</button> 
				</a>
			</div>
			<table class="table table-striped table-bordered table-list"> 
				<thead> 
					<tr> 
						<th>
							<a>
								<span class="glyphicon glyphicon-cog"></span>
							</a>
						</th> 
						<th>Mã danh mục</th> 
						<th>Tên danh mục</th> 
					</tr> 
				</thead> 
			
	<?php 
		while($row=mysql_fetch_array($result))
		{
			$id=$row['id'];
			$ten=$row['name'];
			$link_sua="?action=suamenu&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoamenu=co&id=".$id;
			?>
				<tr> 
					<td align="center">
						<a class="btn btn-default" href="<?php echo $link_sua; ?>">
							<span class="glyphicon glyphicon-pencil"></span>
						</a> 
						<a class="btn btn-danger" onclick = "return confirm('Bạn có thực sự muốn xóa menu này')" href="<?php echo $link_xoa; ?> ">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td> 
					<td >
						<?php echo $id; ?>
					</td> 
					<td >
						<?php echo $ten; ?>
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
						$link_phan_trang="?action=quanlymenu&trang=".$i;
						echo "<a href='$link_phan_trang' >";
						echo "<button>$i</button>";
						echo "</a> ";
					}
				?>
			</div>
		</div>
	</div>
