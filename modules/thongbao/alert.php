<?php 
	function trangtruoc(){
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
	function thongbao($chuoithongbao)
	{
		$lienkettrangtruoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<a href="<?php echo $lienkettrangtruoc; ?>"  >Bấm vào đây để trở về trang trước</a>
				
				<script type="text/javascript">
					alert("<?php echo $chuoithongbao; ?>");
				</script>
			</body>
			</html>
		<?php 
		exit();
	}
	function chuyentrang($chuoithongbao,$linkchuyentrang)
	{
		$lienkettrangtruoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<script type="text/javascript">
					alert("<?php echo $chuoithongbao; ?>");
					window.location="<?php echo $linkchuyentrang; ?>";
				</script>
			</body>
			</html>
		<?php 
		exit();
	}
?>