<?php 
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$tennguoimua=trim($_POST['tennguoimua']);
		$email=trim($_POST['email']);
		$dienthoai=trim($_POST['dienthoai']);
		$diachi=trim(nl2br($_POST['diachi']));
		$noidung=nl2br($_POST['noidung']);
		if($tennguoimua!="" and $dienthoai!="" and $diachi!="")
		{
			$hangduocmua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hangduocmua=$hangduocmua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}		
			$sql="INSERT INTO hoadon (id ,tennguoimua ,email , diachi ,dienthoai ,noidung ,hangduocmua )
            VALUES ( NULL ,'$tennguoimua', '$email', '$diachi','$dienthoai','$noidung','$hangduocmua');";
			mysql_query($sql);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			chuyentrang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php");
		}
		else 
		{
			thongbao("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
			trangtruoc();
			exit();
		}
	}
?>