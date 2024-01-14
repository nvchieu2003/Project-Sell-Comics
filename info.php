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
  <header>
  <?php
    include("connect.php");
    $id=$_GET['id'];
    $sql="SELECT * from manga Where `id`='$id'";
    $rs = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($rs);

    if($num>0){
  ?>
    <div class="container1">
        <br>
        <a href="cart.php" style="margin-left:910px"><button type="button" class="btn btn-warning"><i class="uil uil-shopping-bag"></i> Giỏ hàng</button></a>
        <a href="support.php"><button type="button" class="btn btn-primary"><i class="uil uil-github-alt"></i> Hỗ trợ</button></a>
        <a href="report.php"><button type="button" class="btn btn-dark"><i class="uil uil-exclamation-triangle"></i> Báo cáo</button></a>
        <br><br>
    </div>
    <br><br><br><br><br>
 </header>

<div id="wrapper"> 
<nav class="navbar navbar-expand-lg bg-light" style="padding:20px 100px; margin-top:0px">
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
              <li><a class="dropdown-item" href="#">Tình cảm</a></li>
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
    <!--Headding-->
    <div class="headline">
        <b style="font-size:50px; color:#F93">Thông tin sản phẩm</b>
    </div>
    <!--items-->
    <ul class="products">
    <?php 
			$row = mysqli_fetch_assoc($rs);
			$id = $row['id'];
			$image=	$row['image'];
			$tenmg= $row['tenmg'];
			$theloai=$row['theloai'];
			$gia=$row['gia'];
      $mota=$row['mota'];
		?>
        <li>
<div>
    <img src="<?=$image?>" height="550px" width="500px">
</div> 
            
        </li>
            <?=$mota?><br>

<div style="margin-top:0px">
    


    

    <!-- JavaScript Bundle with Popper -->
    
    <?php
	
    }
?>

<script src="js/navbar.js" ></script>
</body>
</html>