<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select count(*) from sanpham where thuocdanhmuc='$id' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);	
	if($row[0]==0)
	{
		$sql="DELETE FROM danhmucsanpham WHERE id = $id ";
		mysql_query($sql);
		thongbaoquanlymenu("Xóa menu thành công");
	}
	else 
	{
		thongbao("Menu này vẫn còn dữ liệu nên không thể xóa");
	}
		
?>