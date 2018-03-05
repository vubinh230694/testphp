
        <div class="container">
            <?php
                $_SESSION['trangchitietgiohang']="co";
                $id=$_GET['id'];
                $chitiet="select * from sanpham where id='$id'";
                $result=mysql_query($chitiet);
                $row=mysql_fetch_array($result); {?>   
            <div class="row">              
                <div class="detail-form">
                    <div id="left_column" class="col-lg-9 col-sm-9 col-md-9">
                        <div class="primary_block">
                            <div class="row">
                                <div class="pb-left-column col-xs-12 col-sm-5 col-md-6">
                                    <div id="image-block" class="clearfix">
                                        <img src="img-sanpham/<?php echo $row["hinhanh"] ?>" width="100%" height="auto">
                                    </div>
                                </div>
                                <div class="pb-center-column col-xs-12 col-sm-7 col-md-6" >
                                    <h1 itemprop="name"><?php echo $row["tensp"] ?></h1>
                                    <p id="product_condition">
                                        <label>Thương hiệu: </label>
                                        <span class="editable"><?php echo $row["thuonghieu"] ?></span>
                                    </p>
                                    <div id="short_description_block">
                                        <div id="short_description_content" class="rte align_justify" itemprop="description">
                                            <?php echo $row["motangan"] ?>
                                        </div>
                                    </div>
                                    <h2 class="detail-pay"><label>giá từ: </label><span><?php echo $row["gia"] ?> VNĐ</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="title">Mô tả sản phẩm</div>
                            <div class="content-single">
                                <?php echo $row["chitiet"] ?> 
                            </div>
                        </div>
                    </div>
                    <div id="right_column" class="col-md-3 col-lg-3 col-xs-3">
                        <div id="ttcmsrightservices" class="block">
                            <div class="block_content" style="">
                                <div class="ttshipping">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttshipping_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Miễn phí vận chuyển</div>
                                                <div class="service-desc">Tới tận tay khách hàng</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttsupport">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttsupport_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Tư vấn 24/7</div>
                                                <div class="service-desc">1900.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttsaving">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttsaving_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Mua hàng tiết kiếm</div>
                                                <div class="service-desc">Với ưu đãi  cực lớn</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttmoneyback">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttmoneyback_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Thanh toán nhanh</div>
                                                <div class="service-desc">Hỗ trợ mọi hình thức </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttshopping">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttshopping_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Đặt hàng online</div>
                                                <div class="service-desc">Thao tác đơn giản</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttawardwinner">
                                    <div class="ttcontent_inner">
                                        <div class="service">
                                            <div class="ttawardwinner_img service-icon"></div>
                                            <div class="service-content">
                                                <div class="service-title">Nhà bán hàng uy tín</div>
                                                <div class="service-desc">Chứng nhận 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
          </div>