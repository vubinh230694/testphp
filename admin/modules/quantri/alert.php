<?php 
	if(!isset($baomat)){exit();}
?>
<?php 
	function thongbao($c)
	{
		?>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
					window.history.back();
				</script>
		<?php 	
		exit();
	}
	function thongbaoquanlymenu($menu)
	{
		?>
				<script type="text/javascript">
					alert("<?php echo  $menu; ?>");
					window.location="../admin/index.php?action=quanlymenu";
				</script>
		<?php 	
		exit();
	}
	function thongbaoquanlysanpham($sp)
	{
		?>
				<script type="text/javascript">
					alert("<?php echo  $sp  ?>");
					window.location="../admin/index.php?action=quanlysanpham";
				</script>
		<?php 	
		exit();
	}
	function thongbaoquanlyhoadon($hd)
	{
		?>
				<script type="text/javascript">
					alert("<?php echo  $hd  ?>");
					window.location="../admin/index.php?action=hoadon";
				</script>
		<?php 	
		exit();
	}
	function thongbaosanphamtrangchu($tc)
	{
		?>
				<script type="text/javascript">
					alert("<?php echo $tc; ?>");
					window.location="../admin/index.php";
				</script>
		<?php 	
		exit();
	}
?>