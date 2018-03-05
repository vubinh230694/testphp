<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select * from danhmucsanpham where id='$id' ";
	$result=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($result);
	$tendanhmuc=$row['name'];
?>
<div class="container">
	<form action="" method="post">
		<div class="quanly">
		<h1><b>SỬA DANH MỤC</b></h1>
			<div class="form-group">
				<label>Tên danh mục</label>
				<input type='text'  name='name' required="required" class="form-control" placeholder="Tên" value="<?php echo $tendanhmuc; ?>">
			</div>
			<div class="form-group">
				<center>
					<input type="submit" name="suamenu" value="Sửa" class="button-giohang" >
				</center>
			</div>
		</div>
	</form>
</div>

<?php 
    if (isset($_POST['suamenu'])) {
	$id=$_GET['id'];
	$tendanhmuc=$_POST['name'];
	$sql=("UPDATE danhmucsanpham SET name = '$tendanhmuc' WHERE id =$id;");
	mysql_query($sql);
	thongbaoquanlymenu("Sửa menu thành công");
	  }
?>
				
	