<div class="container">
	<div class="banner-danhmuc">
		<img src="img/banner-danhmuc.jpg">
		<img src="img/banner-danhmuc1.png">
	</div>
	<div class="label-bar">
		<label> DANH SÁCH SẢN PHẨM TÌM KIẾM </label>
	</div>
	<div class="form-phukien">
<?php 
	if(trim($_GET['tukhoa'])!=""){ 
		$m=explode(" ",$_GET['tukhoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." tenpk like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$size=15;
		$sql="select count(*) from sanpham  where $chuoi_tim_sql_2";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$page=ceil($row[0]/$size);
		
		if(!isset($_GET['trang'])){$start=0;}else{$start=($_GET['trang']-1)*$size;}
		
		$sql="select id,tenpk,gia,hinhanh,thuocdanhmuc from sanpham where $chuoi_tim_sql_2 order by id desc limit $start,$size";

		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{ 
				for($i=1;$i<=3;$i++)
				{
						if($row!=false)
						{?>
							
							<div class="phukien">
							    <div class="img-phukien">
									<a href="?action=chitietsanpham&id= <?php echo $row['id'] ?>">
									<img src="img-sanpham/<?php echo $row["hinhanh"] ?>"  width="130px" height="130px"></a>
								</div>
								<div class="name-phukien">						
									<label><?php echo $row["tenpk"] ?></label>
									<section> <?php echo $row["gia"] ?> đ</section>       
									
								</div>
								<div class="label">

								</div>
							</div>
						
						<?php  }
							else 
							{
								echo "&nbsp;";
							}
						if($i!=3)
						{
							$row=mysql_fetch_array($result);
						}
					}
			}?>		
		</div>
	<?php 	
		echo "<div class='phantrang' >";
			for($i=1;$i<=$page;$i++)
			{
				$link="?action=timkiem&tukhoa=".$_GET['tukhoa']."&trang=".$i;
					echo "<a href='$link' >  ";
					echo "<button>$i</button>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "</a>";
			}
		echo "</div>";
	}
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}
?>
</div>