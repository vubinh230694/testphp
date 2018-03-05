<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select * from sanpham where id='$id' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);

	$link_hinh="../img-sanpham/".$row['hinhanh'];
	if(is_file($link_hinh))	
	{
		unlink($link_hinh);
	}
	
	$sql="DELETE FROM sanpham WHERE id = $id ";
	mysql_query($sql);
	thongbaoquanlysanpham("Xóa sản phẩm thành công");
?>