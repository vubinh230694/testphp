<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	if(!isset($_GET['action']))
	{
		$action="";
	}else{
		$action=$_GET['action'];}
	switch($action)
	{
		case "themmenu":
			include("modules/menu/themmenu.php");
		break;
		case "quanlymenu":
			include("modules/menu/quanlymenu.php");
		break;
		case "suamenu":
			include("modules/menu/suamenu.php");
		break;
		case "sanpham":
			include("modules/sanpham/lienketsanpham.php");
		break;
		case "themsanpham":
			include("modules/sanpham/themsanpham.php");
		break;
		case "quanlysanpham":
			include("modules/sanpham/quanlysanpham.php");
		break;
		case "suasanpham":
			include("modules/sanpham/suasanpham.php");
		break;
		case "hoadon":
			include("modules/hoadon/quanlyhoadon.php");
		break;
		case "xemhoadon":
			include("modules/hoadon/xemhoadon.php");
		break;
		case "sanphammoi":
			include("modules/sanphammoi/sanphammoi.php");
		break;
		case "sanphamnoibat":
			include("modules/sanphamnoibat/sanphamnoibat.php");
		break;
		case "suathongtinquantri":
			include("modules/quantri/suathongtinquantri.php");
		break;
		default: 
			include("modules/quantri/trangchu2.php");
	}
?>