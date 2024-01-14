<style>
	a.dropdown-item:hover{
			background-color:#F33;
	}
    .footer{
        background-color:#FFCC33;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Star Of Begin - Thế giới Manga</title>
<link href="css/navbar.css" rel="stylesheet">
<link href="css/items.css" rel="stylesheet"> 
<link href="css/header.css" rel="stylesheet">
<link href="css/footer1.css" rel="stylesheet">
<link href="css/footerlast.css" rel="stylesheet">
<link href="css/slideshow.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"><!--font chữ-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!--icon-->
</head>
<body>


<nav class="navbar navbar-expand-lg bg-light" style="padding:20px 100px; margin-top:30px">
    <div class="container" style="background-color:#FF6600; border-radius:7px; height: 60px; font-size:21px;">
      <a class="navbar-brand" href="index.php" style="color:#FFF">Trang chủ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color:#FFF">Nổi bật</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#FFF">Phổ biến</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#FFF">
              Thể loại
            </a>
            <ul class="dropdown-menu" style="background-color:#F93">
              <li><a class="dropdown-item" href="" style="background-color:#F00">Tình cảm</a></li>
              <li><a class="dropdown-item" href="#">Trinh thám</a></li>
              <li><a class="dropdown-item" href="#">Hài hước</a></li>
              <li><a class="dropdown-item" href="#">Phiêu lưu </a></li> 
              <li><a class="dropdown-item" href="#">Gia đình</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search" action="" method="post">
          <input class="form-control me-2" type="search" placeholder="Tìm kiếm" name="search">
          <button class="btn btn-warning" type="submit" name="ok">Search</button>
        </form>
      </div>
    </div>
</nav>

<?php
include("connect.php");

$sql="SELECT * from manga WHERE theloai  LIKE '%Tình cảm%'";
$rs = mysqli_query($conn,$sql);

$num = mysqli_num_rows($rs);

if($num>0){
?>
    <div id="wrapper">
        <!--Headding-->
        <div class="headline">
            <h3>Thể loại: Tình cảm</h3>
        </div>
        <!--items-->
        <ul class="products">
        <?php while($row = mysqli_fetch_assoc($rs)){ 
			$id = $row['id'];
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
                        <a href="" class="product-cat">Thể loại: <?=$theloai?></a>
                        <a href="info.php?id=<?=$id?>" class="product-name"><?=$tenmg?></a>
                        <div class="product-gia"><?=$gia?>.000 VNĐ</div>
                        <a href=""><button type="button" class="btn btn-outline-primary">Mua ngay</button></a>
                        <a href="login.php"><button type="button" class="btn btn-outline-warning">Thêm vào giỏ hàng</button></a>
                       <!-- <button type="button" class="btn btn-outline-primary">Thêm vào giỏ hàng</button>-->
                    </div>
                </div>
            </li>
            <?php
			}
        }
		?>
        </ul>
    </div>

    <!--Phản hồi ý kiến
    <h4>Đánh giá sản phẩm</h4>
 <div>
   <img src="image/User.png" width="50px" height="50px"> <input name="comment" type="text" id="comment" placeholder="Nhập bình luận ..." value="" size="80" style="margin-left:10px; height:50px; border-radius:10px; border-color:#F93 ">
 </div>   
-->


<footer class="footer">
        <div class="row">
            <div class="boxcenter2">
                <div class="boxfooter1">
                    <h4>Follow us</h4>
                    <a href="">Facebook : TheStarOfBegin <i class="uil uil-facebook"></i></a>
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
    <!-- JavaScript Bundle with Popper -->
<script src="js/navbar.js" ></script>
</body>
</html>