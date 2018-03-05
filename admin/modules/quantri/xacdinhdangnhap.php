<?php 
	if(!isset($baomat)){exit();}
	function thongbaologin()
	{
		?>
				<script type="text/javascript">
					alert("Tài khoản hoặc mật khẩu không đúng");
					window.history.back();
				</script>
		<?php 
		exit();
	}
	if(isset($_POST['dangnhapquantri']))
	{
		$taikhoan=$_POST['taikhoan'];
		$taikhoan=str_replace("'","",$taikhoan);
		$taikhoan=str_replace('"',"",$taikhoan);
		$matkhau=md5($_POST['matkhau']);
		$matkhau=md5($matkhau);
		
		$sql="select count(*) from thongtinquantri where taikhoan='$taikhoan' and matkhau='$matkhau' ";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		if($row[0]==1)
		{
			$_SESSION['taikhoan']=$taikhoan;
			$_SESSION['matkhau']=$matkhau;
		}
		else 
		{
			thongbaologin();
		}
	}
	
	if(isset($_SESSION['taikhoan']))
	{
		$taikhoan=$_SESSION['taikhoan'];
		$matkhau=$_SESSION['matkhau'];
		$sql="select count(*) from thongtinquantri where taikhoan='$taikhoan' and matkhau='$matkhau' ";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		if($row[0]==1)
		{
			$xacdinhdangnhap="co";
		}
	}
?>