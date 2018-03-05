
<?php 
	$soluong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$soluong=$soluong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>
<span class="glyphicon glyphicon-shopping-cart"></span>
<a href="?action=giohang"><p>Giỏ hàng</p></a>
<strong>Số lượng : <?php echo $soluong; ?></strong>
<label class="glyphicon glyphicon-list-alt"></label>



