<?php 
	if(!isset($baomat)){exit();}
?>
	<div class="header-container">
		<div class="nav">
			<div class="container">
				<nav>
					<div class="ttpermanent-link">
						<ul id="header_links" class="toggle-footer">
							<li>
								<a href="../index.php">Trang Chủ</a>
							</li>
							<li>
								<a href="?action=quanlymenu">Quản Lý Danh mục</a> 
							</li>
							<li>
								<a href="?action=quanlysanpham">Quản Lý Sản Phẩm</a>
							</li>
							<li >&nbsp</li>
							<li >&nbsp</li>
							<li >&nbsp</li>
							<li >
								<a href="?action=thoat">Thoát</a>
							</li>
						</ul>	
					</div>
				</nav>
			</div>
		</div>
		<div class="full-header">
			<div class="container">
				<div class="ttheader">
					<div id="header_logo">
						<a title="sapomart" href="index.php">
							<img class="regular-logo" src="../img/logo.png" alt="sapomart" itemprop="logo">
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php 
			include("modules/quantri/link.php");
		?>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="footer-content1">
						<div class="ttfooter-desc toggle-footer" style="">
							<img src="../img/logo-white.png" width="210" alt="sapomart">
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
						