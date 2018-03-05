<?php 
	if(!isset($baomat)){exit();}
?>
<div class="container">
	<form action="" method="post" class="form">
		<div class="quanly">
			<h1><b>THÊM DANH MỤC</b></h1>
			<div class="form-group">
				<label>Tên danh mục</label>
				<input type='text'  name='name' required="required" class="form-control" placeholder="Tên">
			</div>
			<div class="form-group">
				<center>
					<input type="submit" name="themmenu" value="Thêm" class="button-giohang" >
				</center>
			</div>
		</div>
	</form>
</div>
<?php 
    if(isset($_POST['themmenu']))
    {
	$name=$_POST['name'];
	$sql=("INSERT INTO danhmucsanpham (id ,name) VALUES (NULL ,'$name');");
	mysql_query($sql);
    thongbaoquanlymenu("Thêm menu thành công");
	
}
?>