<?php
	session_start();
	$baomat="co";
    include("../config.php");	
	include("modules/quantri/xacdinhdangnhap.php");
	include("modules/quantri/alert.php");
	if(isset($xacdinhdangnhap))
	{
		if($xacdinhdangnhap=="co")
		{
			include("modules/quantri/xulypostget.php");
		}   
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Quản trị</title>
		<link rel="stylesheet" type ="text/css" href ="layout/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="layout/style-admin.css">
		<script type="text/javascript" src="layout/javascript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="layout/javascript/script.js"></script>
	</head>
	<body>
		
		<?php 
			if(!isset($xacdinhdangnhap))
			{
				include("modules/quantri/khungdangnhap.php");
			}
			else 
			{
				if($xacdinhdangnhap=="co")
				{
						include("modules/quantri/trangchu.php");
				}
			}
		?>
				
	</body>
</html>