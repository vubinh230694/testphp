<?php 
	if(isset($_GET['action']))
	{$action=$_GET['action'];}
	else{$action="";}
	switch($action)
	{
		case "hienthisanpham":
			include("modules/sanpham/theodanhmuc.php");
		break;
		case "chitietsanpham":	
			include("modules/sanpham/chitietsanpham.php");
		break;
		case "danhsachsanpham":
			include("modules/sanpham/danhsachsp.php");
		break;
		case "tintuc":
			include("modules/tintuc.php");
		break;
		case "timkiem":
			include("modules/timkiem/xuatsanphamtimkiem.php");
		break;
		case "giohang":
			include("modules/giohang/giohang.php");
		break;
		default:	
			include("content.php");	
	}
?>