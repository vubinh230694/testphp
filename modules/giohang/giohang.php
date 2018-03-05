<?php 
	if(isset($_GET['id']) and $_SESSION['trangchitietgiohang']=="co")
	{
		$_SESSION['trangchitietgiohang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trunglap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trunglap="co";
					$vitritrunglap=$i;
					break;
				}
			}
			if($trunglap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['soluong'];
			}
			if($trunglap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vitritrunglap]=$_SESSION['sl_them_vao_gio'][$vitritrunglap]+$_GET['soluong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['soluong'];
		}
	}

	$giohang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$soluong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$soluong=$soluong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($soluong!=0)
		{
			$giohang="co";
		}
	}?>
    <div class="container">
	    <div class="banner-danhmuc">
			<img src="img/banner-danhmuc.jpg">
			<img src="img/banner-danhmuc1.png">
		</div>
    	<div class="form-giohang">
    	<div class="label-bar">
    	<label>GIỎ HÀNG CỦA TÔI</label>
    	</div>

	<?php 
	if($giohang=="khong")
	{
		echo "<h1><center>Không có sản phẩm trong giỏ hàng</center></h1>";
	}
	else 
	{
            echo "<form action='' method='post' >"; 
			$tongcong=0;
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$sql="select id,tenpk,hinhanh,gia,chitiet from sanpham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$tien=$row['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tongcong=$tongcong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
				echo "<div class='sanpham-giohang'>";
					echo "<img src=img-sanpham/".$row['hinhanh'].">";
					echo "<div class='chitiet-sanpham-giohang'>";
						echo "<p>".$row['tenpk']."</p>";
						echo $row['chitiet'];
					echo "</div>";
					echo "<div class='soluong-sanpham-giohang'>";
						echo "<label>Số lượng</label>";
						echo "<b><center>". $_SESSION['sl_them_vao_gio'][$i]."</center></b>";
					echo "</div>";
					echo "<div class='dongia-sanpham-giohang'>";
						echo "<label>Đơn giá</label>";
						echo "<strong>".$row['gia']."đ</strong>";
					echo "</div>";
					echo "<div class='tongtien-sanpham-giohang'>";
						echo "<label>Tổng tiền</label>";
						echo "<strong>".$tien.".000đ </strong>";
					echo "</div>";
				echo "</div>";
				}
			}	
            echo "</form>";
            echo "<div class='thanhtien-giohang'>";
	            echo "<label>Thành tiền(Tổng số tiền thanh toán):</label>";
				echo "<b>".$tongcong.".000VNĐ</b>";
			echo "</div>";
            echo "<div class='thongtin-giohang'>";
                echo "<div class='label-bar'>";
             	echo "<label>THÔNG TIN NGƯỜI MUA </label>";
             	echo "</div>";
          	  	include("modules/giohang/bieumaumuahang.php");
			echo "</div>";
	}
	
?>
	</div>
</div>