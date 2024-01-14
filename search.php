
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Star Of Begin - Thế giới Manga</title>
    
 <link rel="shortcut icon" href="image/star.jpg">    
<link href="css/navbar.css" rel="stylesheet">
<link href="css/items.css" rel="stylesheet"> 
<link href="css/header.css" rel="stylesheet">
<link href="css/footer1.css" rel="stylesheet">
<link href="css/footerlast.css" rel="stylesheet">
<link href="css/slideshow.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"><!--font chữ-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!--icon-->
</head>


<body>

<?php
include("connect.php");
	if(isset($_GET['search'])){
		$search=$_GET['search'];
		$sql="SELECT * from manga WHERE tenmg  LIKE '%$search%' OR theloai LIKE '%$search%' ";
		$rs = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($rs);
		if($num>0 and $search!=" "){
			echo "<div align='center' style='margin-bottom:40px; margin-top:28px' >"."<h3>"."Có $num kết quả trả về với từ khóa: '<b>$search</b>'"."</h3>"."</div>";
?>
<div id="wrapper">
        <ul class="products">
		<?php while ($row = mysqli_fetch_assoc($rs)) {
			$image=	$row['image'];
			$tenmg= $row['tenmg'];
			$theloai=$row['theloai'];
			$gia=$row['gia'];
		?>
            <li>
                <div class="prduct-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="<?=$image?>">
                        </a>
                            <a href="#" class="buy-now"><img src="image/download-48x48-48x48.png" 30px 30px></a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"><?=$theloai?></a>
                        <a href="info.html" class="product-name"><?=$tenmg?></a>
                        <div class="product-gia"><?=$gia?>.000 VNĐ</div>
                        <a href="login.php"><button type="button" class="btn btn-outline-primary">Mua ngay</button></a>
                        <button type="button" class="btn btn-outline-warning">Thêm vào giỏ hàng</button>
                    </div>
                </div>
              </li>
         <?php
				}
			}else{
				echo "<div align='center' style='margin-bottom:25px; margin-top:28px' >"."<h3>"."Không tìm thấy kết quả phù hợp"."</h3>"."</div>";
				?>
                <div align="center" style="margin-bottom:95px"><img src="image/sch.jpg" width="750px" height="360px"></div>
         <?php 
			}
		}	
		 ?>
        </ul>
   	</div>
<footer class="footer">
        <div class="row" style="margin-bottom:0px">
            <div class="boxcenter2">
                <div class="boxfooter1">
                    <h4>Follow us</h4>
                    <a href="https://www.facebook.com/profile.php?id=100027250897239">Facebook : TheStarOfBegin <i class="uil uil-facebook"></i></a>
                    <br>
                    <br>
                    <a href="">Trung tâm điều khiển: 19000 <i class="uil uil-calling"></i></a>
                    <br>
                    <br>    
                    <a href="">Twiter: Bacongianchua<i class="uil uil-twitter"></i></a>
                    
                </div>
                <div class="boxfooter2">
                    <h4>Hướng dẫn</h4>
                    <div class="add mrbt"><a href="">Điều khoản</a></div>
                    <div class="add mrbt"><a href="">Chính sách bản quyền</a></div>
                    <div class="add mrbt"><a href="">Trung tâm trợ giúp</a></div>
                    <div class="add mrbt"><a href="">Liên hệ: 0344849155</a></div>
                    <div class="add mrbt"><a href="">Email:thestarofbegin@gmail.com</a></div>
                </div>
                <div class="boxfooter3">
                    <h4>Địa chỉ</h4>
                    <div class="add"><i class="uil uil-map-marker-shield"></i> 425 Mạc Cửu, Vĩnh Thanh, Rạch Giá, Kiên Giang</div>
                </div>

            </div>
        </div>
        <div class="row2">
        Copyright © 2022 The Star Of Begin
        </div>
            
</footer>
</body>
</html>