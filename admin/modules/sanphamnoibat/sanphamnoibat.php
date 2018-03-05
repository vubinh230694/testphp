<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$sql="select id,tensp,gia,hinhanh from sanpham where noibat='co' order by id desc limit 0,10";
	$result=mysql_query($sql);
?>
<div class="container"> 
	<form method="post" class="form" >
		<div class="quanly">
			<div class="quanly-header">
				<h1><b>SẢN PHẨM NỔI BẬT</b></h1>
				<div class="quanly-them">
					
				</div>
			</div>
			<table class="table table-striped table-bordered table-list"> 
				<thead> 
					<tr> 
						<th>Mã số</th> 
						<th>Hình ảnh</th> 
						<th>Tên sản phẩm</th> 
						<th>Giá</th> 
						<th>Nổi bật</th>
					</tr> 
				</thead> 
			<?php 
				$i=1;
				while($row=mysql_fetch_array($result))
				{
					$id=$row['id'];
					$ten=$row['tensp'];
					$gia=$row['gia'];
					$link_hinh="../img-sanpham/".$row['hinhanh'];
					$ten_select="select_".$i;
					$ten_id="id_".$i;
					?>
				<tr> 
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
					<td>
						<select name="<?php echo $ten_select; ?>" >
							<option value="" >Không</option>
							<option value="co" selected >Có</option>
						</select>
						<input  type="hidden" value="<?php echo $id; ?>" name="<?php echo $ten_id; ?>" >
					</td>
				</tr> 
					<?php				
						$i++;
						}
					?>
			</table>
			<div class="button-login">
				<center>
					<input type="submit" name="sanphamnoibat" value="Cập nhật" >
				</center>
			</div>
		</div>
	</form>
</div>
<?php 
if(isset($_POST['sanphamnoibat']))
{
	for($i=1;$i<=10;$i++)
	{
		$ten_select="select_".$i;
		$ten_id="id_".$i;
		if(isset($_POST[$ten_id]))
		{
			$id=$_POST[$ten_id];
			$noibat=$_POST[$ten_select];
			$sql="update sanpham set 
					noibat='$noibat' 
					where id='$id';
			";
			mysql_query($sql);
		}
	}
	thongbaosanphamtrangchu("cập nhật thành công");

	}
?>