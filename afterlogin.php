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
    <link rel="shortcut icon" href="image/star.jpg">  
<link href="css/navbar.css" rel="stylesheet">
<link href="css/items.css" rel="stylesheet"> 
<link href="css/header.css" rel="stylesheet">
<link href="css/footer1.css" rel="stylesheet">
<link href="css/footerlast.css" rel="stylesheet">
<link href="css/slideshow.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"><!--font chữ-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!--icon-->
<script language="javascript">
function ThongBao(){
return confirm("Bạn chắc muốn đăng xuất ?");	
}
</script>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: login.php");
	$user=$_SESSION['user'];
?>
<?php
include("connect.php");

$sql="SELECT * from manga";
$rs = mysqli_query($conn,$sql);

$num = mysqli_num_rows($rs);

if($num>0){
?>

<!--<img src="image/banner.jpg"; height="200px" width="100%">-->
<header>
    <div class="container1">    
        <img src="image/bannerc1.jpg" height="250px" width="1500px">
        <br><br><br>
     </div>
         <a href="" style="float:left; margin-left:25px ;color:#FC0"><h4><b>CHÀO MỪNG '<?=$user?>' đã đến The Star Of Begin</b></h4></a>
        <div style="float:right; margin-right:15px">
        
        <a href="logout.php" style="margin-right:20px"><button type="button" class="btn btn-secondary" onclick="return ThongBao()"><i class="uil uil-signout"></i> Đăng xuất</button></a>
        
        <a href="cart.php"><button type="button" class="btn btn-warning"><i class="uil uil-shopping-bag"></i> Giỏ hàng</button></a>
        <a href="support.php"><button type="button" class="btn btn-primary"><i class="uil uil-github-alt"></i> Hỗ trợ</button></a>
        <a href="report.php" style="margin-bottom:100px"><button type="button" class="btn btn-dark"><i class="uil uil-exclamation-triangle"></i> Báo cáo</button></a>
     </div>
        
 </header>
<!--silder-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true"  style="margin-left:160px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/banner10.jpg" height="420px" width="600px" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="image/banner11.jpg" height="420px" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="image/banner12.jpg" height="420px" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="margin-top:300px">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="margin-top:300px">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--nvabar-->
<nav class="navbar navbar-expand-lg bg-light" style="padding:20px 100px; margin-top:280px">
    <div class="container" style="background-color:#FF6600; border-radius:7px; height: 60px; font-size:21px">
      <a class="navbar-brand" href="#" style="color:#FFF">Trang chủ</a>
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
              <li><a class="dropdown-item" href="aftype_love.php">Tình cảm</a></li>
              <li><a class="dropdown-item" href="#">Trinh thám</a></li>
              <li><a class="dropdown-item" href="#">Hài hước</a></li>
              <li><a class="dropdown-item" href="#">Phiêu lưu </a></li> 
              <li><a class="dropdown-item" href="#">Gia đình</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search" action="search.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Tìm kiếm" name="search">
          <button class="btn btn-warning" type="submit" name="ok">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <!--Frame-->
    <style>
        background-image:
    </style>
    <div id="wrapper">
        <!--Headding-->
        <div class="headline">
            <h3>Sản phẩm bán chạy trong tuần</h3>
        </div>
        <!--items-->
        <ul class="products">
           <?php for ($i=1; $i<=64; $i++){ 
			$row = mysqli_fetch_assoc($rs);
			$id = $row['id'];
			$image=	$row['image'];
			$tenmg= $row['tenmg'];
			$theloai=$row['theloai'];
			$gia=$row['gia'];
			if($id<=16){
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
                        <a href="info.php?id=<?=$id?>" class="product-name"><?=$tenmg?> </a>
                        <div class="product-gia"><?=$gia?>.000 VNĐ</div>
                        <a href=""><button type="button" class="btn btn-outline-primary">Mua ngay</button></a>
                        <form action="addtocart.php" method="get">
                        <input type="hidden" name="id" id="id" value="<?=$id?>">
                          <a href="addtocart.php?id=<?=$id?>"><button type="submit" class="btn btn-outline-warning">Thêm vào giỏ hàng</button></a>
                        </form>
                    </div>
                </div>
            </li> 
            <?php
					}
				}
			}
		?>
        </ul>
    </div>

    <div class="btn-toolbar" role="toolbar">
    <div class="btn-groupS" role="group">
        <button type="button" class="btn btn-outline-secondary" style="background-color:#999; color:#fff">1</button>
        <a href="afterlogin2.php"><button type="button" class="btn btn-outline-secondary">2</button></a>
        <a href="trang3.php"><button type="button" class="btn btn-outline-secondary">3</button></a>
        <a href="trang4.php"><button type="button" class="btn btn-outline-secondary">4</button></a>
    </div>
    </div>
    <!--Phản hồi ý kiến-->
    <h4>Góp ý về trang web</h4>
    <div>
    <form name="cmnt" action="" method="POST">
   <img src="image/User.png" width="50px" height="50px"> 
   <input name="comment" type="text" id="comment" placeholder="Nhập bình luận ... "  size="80" style="margin-left:10px; height:50px; border-radius			:10px; border-color:#F93; margin-bottom:25px"> 
	</form>
 </div>
 
 <!--Comment-->
 <div class="cmt_bd" style="border: 1px solid #b1154a; border-radius:5px ;padding:15px">
 <div align="center"><h3>Góp ý của khách hàng</h3></div>
 <?php
include("connect.php");
	if(isset($_POST['comment'])){
		$comment=$_POST['comment'];
		$tencmt=$_SESSION['user'];
		if($comment !=""){
			$sql = "INSERT INTO `gopy`( `user` , `noidung`) VALUES ('$tencmt','$comment')";
			$rs = mysqli_query($conn, $sql);
	
			if($rs)
			{
				echo '<script>alert("Góp ý thành công")</script>';
			}else
				echo '<script>alert("Góp ý không thành công")</script>';
		}else
			echo '<script>alert("Bạn cần nhập nội dung")</script>';
	}
	
?>
  <?php
		$user=$_SESSION['user'];
		/*$sql = $sql="SELECT noidung from binhluan WHERE user = '$user'";
		$rs = mysqli_query($conn, $sql);*/
		$sql2 = $sql="SELECT * from gopy";
		$rs2 = mysqli_query($conn, $sql2);
		while ($row = mysqli_fetch_assoc($rs2)){
			$user=$row['user'];
			$noidung=$row['noidung'];

			echo "<div style='margin-left:30px; height:20px; border-radius:3px; border-color:#F93'>"."<h5> Khách hàng ".$user.": ".$noidung ."</h5>"."</div>";
			echo "<div style='margin-left:30px; border-radius:3px; border-color:#F93; margin-bottom:15px'>"."-------------------------------------------------------------------------------"."</div>";
		}
 ?>
	</div>
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