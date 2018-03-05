<?php 
	if(!isset($baomat)){exit();}
?>
<div class="container">
	<form action="" method="post" enctype="multipart/form-data" class="form">
		<div class="quanly">
			<h1><b>THÊM SẢN PHẨM</b></h1>
			<div class="form-group">
				<label>Tên sản phẩm</label>
				<input type='text'  name='tensp' required="required" class="form-control" placeholder="Tên">
			</div>
			<div class="form-group">
				<label>Danh mục sản phẩm</label>
				<?php
				if(!isset($_SESSION['danh_muc_menu']))
				{
				$_SESSION['danh_muc_menu']="";
				}
				?>
				<select name="danhmuc" class="form-control" >
					<?php 
					$sql="select * from danhmucsanpham order by id ";
					$result=mysql_query($sql);
					$chon="";
					while($row=mysql_fetch_array($result))
					{
						$name=$row['name'];
						$id_menu=$row['id'];
						if($_SESSION['danh_muc_menu']==$id_menu)
						{
							$chon="selected";
						}
						echo "<option value='$id_menu' $chon >";
						echo $name;
						echo "</option>";
						$chon="";
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Hình ảnh sản phẩm</label>
				<input type='file' name='hinhanh' class="form-control"  placeholder="" required="required">
			</div>
			<div class="form-group">
				<label>Giá sản phẩm</label>
				<input type='number'  name='gia' class="form-control" placeholder="VNĐ" required="required">
			</div>
			<div class="form-group">
				<label>Thương hiệu</label>
				<textarea id="thuonghieu" name="thuonghieu" class="form-control" rows="1" ></textarea>
			</div>
			<div class="form-group">
				<label>Mô tả ngắn</label>
				<textarea id="motangan" name="motangan" class="form-control" rows="5" ></textarea>
			</div>
			<div class="form-group">
				<label>Chi tiết sản phẩm</label>
				<textarea id="chitiet" name="chitiet" class="form-control" rows="5" cols="40"></textarea>
			</div>
			<div class="form-group">
				<label>Sản phẩm mới </label>
				<?php
					$chon1="";
					$chon2="";
					if(isset($_SESSION['tuy_chon_moi']))
					{
						if($_SESSION['tuy_chon_moi']=="co")
							{
								$chon2="selected";
							}
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
					if(isset($_SESSION['tuy_chon_noi_bat']))
					{
						if($_SESSION['tuy_chon_noi_bat']=="co")
						{
							$chon2="selected";
						}
					}
				?>
				<select name="noibat" class="form-control" >
					<option value="" <?php echo $chon1; ?> >Không</option>
					<option value="co" <?php echo $chon2; ?> >Có</option>
				</select>
			</div>
			<div class="form-group">
				<center>
					<input type="submit" name="themsanpham" value="Thêm sản phẩm" class="button-giohang" >
				</center>
			</div>
		</div>
	</form>
</div>
<?php 
if(isset($_POST['themsanpham']))
{
	$tensp=$_POST['tensp'];
	$danhmuc=$_POST['danhmuc'];
	$gia=$_POST['gia'];
	if($gia==""){$gia=0;}
	$ten_file_anh=$_FILES['hinhanh']['name'];
	$moi=$_POST['moi'];
	$noibat=$_POST['noibat'];
	$thuonghieu=$_POST['thuonghieu'];
	$chitiet=$_POST['chitiet'];
	$motangan=$_POST['motangan'];
	$chitiet=str_replace("'","&#39;",$chitiet);
	if($tensp!="")
	{
		if($ten_file_anh!="")
		{
			$sql_1="select count(*) from sanpham where hinhanh='$ten_file_anh' ";
			$result_1=mysql_query($sql_1);
			$row_1=mysql_fetch_array($result_1);
			if($row_1[0]==0)
			{
				$sql="INSERT INTO sanpham (id ,tensp ,gia ,hinhanh ,chitiet ,thuocdanhmuc ,noibat ,moi,motangan,thuonghieu)
				VALUES (NULL ,'$tensp','$gia','$ten_file_anh','$chitiet','$danhmuc','$noibat','$moi','$motangan','$thuonghieu');";
				mysql_query($sql);
				$duong_dan_anh="../img-sanpham/".$ten_file_anh;
				move_uploaded_file($_FILES['hinhanh']['tmp_name'],$duong_dan_anh);
				
				$_SESSION['danh_muc_menu']=$danhmuc;
				$_SESSION['tuy_chon_moi']=$moi;
				$_SESSION['tuy_chon_noi_bat']=$noibat;
			}
			else 
			{
				thongbao("Hình ảnh bị trùng tên");
			}
		}
		else 
		{
			thongbao("Chưa chọn ảnh");
		}
	}
	 
	thongbaoquanlysanpham("Thêm sản phẩm thành công");
}
?>