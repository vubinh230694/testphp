<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select * from sanpham where id='$id' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$tensp=$row['tensp'];
	$gia=$row['gia'];
	$moi=$row['moi'];
	$noibat=$row['noibat'];
	$chitiet=$row['chitiet'];
	$motangan=$row['motangan'];
	$hinhanh=$row['hinhanh'];
	$thuonghieu=$row['thuonghieu'];
?>
<div class="container">
	<form action="" method="post" enctype="multipart/form-data" >
		<div class="quanly">
			<h1><b>SỬA SẢN PHẨM</b></h1>
			<div class="form-group">
				<label>Tên sản phẩm</label>
				<input type='text'  name='tensp' required="required" class="form-control" placeholder="Tên" value="<?php echo $tensp; ?>">
			</div>
			<div class="form-group">
				<label>Hình ảnh sản phẩm</label>
				<br>
				<img src="../img-sanpham/<?php echo $hinhanh; ?>"" width="180px" > 
				<input type='hiden' name='hinhanh' class="form-control"  value="<?php echo $hinhanh; ?>">
				<input type='file' name='hinhanh' class="form-control"  placeholder="" >
			</div>
			<div class="form-group">
				<label>Giá sản phẩm</label>
				<input type='number'  name='gia' class="form-control" placeholder="VNĐ" required="required" value="<?php echo $gia; ?>">
			</div>
			<div class="form-group">
				<label>Thương hiệu</label>
				<textarea id="thuonghieu" name="thuonghieu" class="form-control" rows="1" ><?php echo $thuonghieu; ?></textarea>
			</div>
			<div class="form-group">
				<label>Mô tả ngắn</label>
				<textarea id="motangan" name="motangan" class="form-control" rows="5"><?php echo $motangan; ?>
				</textarea>
			</div>
			<div class="form-group">
				<label>Chi tiết sản phẩm</label>
				<textarea id="chitiet" name="chitiet" class="form-control" rows="5" ><?php echo $chitiet; ?>
				
				</textarea>
			</div>
			<div class="form-group">
				<label>Sản phẩm mới </label>
				<?php
					$chon1="";
					$chon2="";
					if($moi=="co")
					{
						$chon2="selected";
					}
				?>
				<select name="moi" class="form-control" >
					<option value="" <?php echo $chon1; ?> >Không</option>
					<option value="co" <?php echo $chon2; ?> >Có</option>
				</select>
			</div>
			<div class="form-group">
				<label>Sản phẩm nổi bật  </label>
				<?php
					$chon1="";
					$chon2="";
					if($noibat=="co")
					{
						$chon2="selected";
					}
				?>
				<select name="noibat" class="form-control" >
					<option value="" <?php echo $chon1; ?> >Không</option>
					<option value="co" <?php echo $chon2; ?> >Có</option>
				</select>
			</div>
			<div>
				<center>
					<input type="submit" name="suasanpham" value="Sửa sản phẩm"  class="button-giohang" >
				</center>
			</div>
		</div>
	</form>
</div>
<?php 
if(isset($_POST['suasanpham']))
{
	$tensp=$_POST['tensp'];
	$gia=$_POST['gia'];
	$moi=$_POST['moi'];
	$noibat=$_POST['noibat'];
	$chitiet=$_POST['chitiet'];
	$ten_file_anh_tai_len=$_FILES['hinhanh']['name'];
	if($ten_file_anh_tai_len!="")
	{
		$ten_file_anh=$ten_file_anh_tai_len;
	}
	else 
	{
		$ten_file_anh=$_POST['hinhanh'];
	}
	$id=$_GET['id'];
	if($tensp!="")
	{
		$sql_1="select count(*) from sanpham where hinhanh='$ten_file_anh' ";
		$result_1=mysql_query($sql_1);
		$row_1=mysql_fetch_array($result_1);
		if($row1[0]==0 or $ten_file_anh_tai_len=="")
		{
			$sql="UPDATE sanpham SET tensp = '$tensp',gia = '$gia',hinhanh = '$ten_file_anh',
			chitiet = '$chitiet',moi = '$moi',noibat = '$noibat' WHERE id =$id;";
			mysql_query($sql);
			if($ten_file_anh_tai_len!="")
			{				
				$duong_dan_anh="../img-sanpham/".$ten_file_anh_tai_len;
				move_uploaded_file($_FILES['hinhanh']['tmp_name'],$duong_dan_anh);
				$duong_dan_anh_cu="../img-sanpham/".$_POST['hinhanh'];
			}
				
		}
		else 
		{
			thongbao("Hình ảnh bị trùng ");
		}
	}
	thongbaoquanlysanpham("Sửa sản phẩm thành công");
	}
	
?>
