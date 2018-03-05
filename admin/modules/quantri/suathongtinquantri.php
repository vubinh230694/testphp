<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$sql="select * from thongtinquantri where id='1' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$taikhoan=$row['taikhoan'];	
	$matkhau=$row['matkhau'];
?>
<div class="container">
	<form action="" method="post" >
		<div class="quanly">
		<h1><b>SỬA THÔNG TIN QUẢN TRỊ</b></h1>
			<div class="form-group">
				<label>Tài khoản</label>
				<input type='text'  required="required" class="form-control" name="taikhoan" value="<?php echo $taikhoan; ?>" >
			</div>
			<div class="form-group">
				<label>Mật Khẩu</label>
				<input type='password'  required="required" class="form-control"  name="matkhau" value="<?php echo $matkhau; ?>" >
			</div>
			<div class="form-group">
				<center>
					<input type="submit" name="suathongtinquantri" value="Sửa" class="button-giohang" >
				</center>
			</div>
		</div>
	</form>
</div>
<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	if(isset($_POST['suathongtinquantri']))
	{
		$sql="select * from thongtinquantri where id='1' ";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$taikhoan=$_POST['taikhoan'];
		$matkhau=$row['matkhau'];
		$matkhautuform=$_POST['matkhau'];
		$matkhau=md5($matkhautuform);
		$matkhau=md5($matkhau);
		$sql="
		UPDATE thongtinquantri SET 
		taikhoan = '$taikhoan',
		matkhau = '$matkhau' 
		WHERE id =1;
		";
		mysql_query($sql);
		$_SESSION['taikhoan']=$taikhoan;
		$_SESSION['matkhau']=$matkhau;
		thongbao("Đã cập nhật lại thông tin quản trị");			
		header("location:../admin/index.php");
	}
?>
		