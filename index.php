<?php
	session_start();
    include("config.php");	
    include("modules/thongbao/alert.php");	
	if(isset($_POST['thongtinkhachhang']))
	{
		include("modules/giohang/thuchienmuahang.php");
	}
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sapomart - giới thiệu máy tính đẳng cấp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type ="text/css" href ="layout/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type ="text/css" href ="layout/css/style.css">
		<script type="text/javascript" src="layout/javascript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="layout/javascript/script.js"></script>
		<script type="text/javascript" src="layout/javascript/slider.js"></script>
	</head>
	<body>
		<div class="header-container">
			<div class="nav">
				<div class="container">
					<nav>
						<div id="ttcmsheader" class="col-xs-12 col-sm-4">
							<a href="" class="ttheader-service">Các chương trình khuyến mại!</a>
						</div>
						<div class="ttpermanent-link">
							<?php 
								include("modules/menu/menu.php");
							?>	 
						</div>
						<div class="header_user_info">
							<a class="login" href="admin/index.php" rel="nofollow" title="Đăng nhập vào tài khoản của tôi"> Đăng nhập </a>
						</div>
					</nav>
				</div>
			</div>
			<div class="full-header">
				<div class="container">
					<div class="ttheader">
						<div id="header_logo">
							<a title="sapomart" href="index.php">
								<img class="regular-logo" src="img/logo.png" alt="sapomart" itemprop="logo">
							</a> 
						</div>
						<div class="ttheader-bg">
							<div id="ttcmsheaderservices" class="col-xs-12 col-sm-6 col-lg-3">
								<div class="ttcmsheaderservice col-xs-12 col-sm-12">
									<div class="ttsupport">
										<div class="ttcontent_inner">
											<div class="service">
												<div class="ttsupport_img service-icon"></div>
												<div class="service-content">
													<div class="service-title">Tư Vấn 24/7</div>
													<div class="service-desc"><a href="tel:0902-068-068" style="color: #fff"> 1900-000-000</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div id="search_block_top" class="clearfix col-sm-6">
								<?php 
									include("modules/timkiem/vungtimkiem.php"); 
								?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<?php 
			include("modules/link.php");
		?>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="footer-content1">
						<div class="ttfooter-desc toggle-footer" style="">
							<img src="img/logo-white.png" width="210" alt="sapomart">
							<div class="clearfix">Sapomart siêu thị của mọi gia đình, sản phẩm cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="footer-content2">
						<div>
							<h4>Thông tin cửa hàng</h4>
							<ul class="toggle-footer" style="">
								<li>
									<div class="ttcontactinfo">Phòng 214, Chung cư B3, Phường Quan Hoa , Cầu Giấy, Hà Nội</div>
								</li>
								<li> <a href="tel:0902068068" style="color: #8a8a8a"> <span>0902068068</span></a>
								</li>
								<li> <span><a href="mailto:halymedia@gmail.com">halymedia@gmail.com</a></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="footer-content3">
						<h4 class="title_block">Bản tin </h4>
						<div class="block_content toggle-footer" style="">
							<div class="tt-desc">Đăng ký với chúng tôi để được cập nhật sớm nhất </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>							
	</body>
</html>
