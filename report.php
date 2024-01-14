
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"><!--font chữ-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!--icon-->
    <script language="javascript">
		function checkInput()
		{
			if(document.form1.fullname.value=="")
			{
				alert("Bạn phải nhập họ tên");
				document.form1.fullname.focus();
				return false;
			}
			if(document.form1.email.value=="")
			{
				alert("Bạn phải nhập email");
				document.form1.email.focus();
				return false;
			}
			if(document.form1.phone.value=="")
			{
				alert("Bạn phải nhập số điện thoại");
				document.form1.phone.focus();
				return false;
			}
			if(document.form1.comment.value=="")
			{
				alert("Bạn phải nhập nội dung báo cáo");
				document.form1.comment.focus();
				return false;
			}
			return true;
		}
	</script>
</head>
<body>

<div id="wrapper">
<nav class="navbar navbar-expand-lg bg-light" style="padding:20px 100px; margin-top:0px">
    <div class="container" style="background-color:#FF6600; border-radius:7px; height: 60px; font-size:21px;">
      <a class="navbar-brand" href="afterlogin.php" style="color:#FFF">Trang chủ</a>
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
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#FFF">
              Thể loại
            </a>
            <ul class="dropdown-menu" style="background-color:#F93">
              <li><a class="dropdown-item" href="#">Thể thao</a></li>
              <li><a class="dropdown-item" href="#">Trinh thám</a></li>
              <li><a class="dropdown-item" href="#">Hài hước</a></li>
              <li><a class="dropdown-item" href="#">Phiêu lưu </a></li> 
              <li><a class="dropdown-item" href="#">Gia đình</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>

<section class="contact-pg section">
		<div class="container card py-3">
			<div class="row">
				<div class="col-lg-6 col-6">
					<div class="left-contact px-2">
						<h1 align="center" class="title-page mb-3"><strong>The Star Of Begin</strong></h1>
							<div class="single-contact">
								
								<div class="content">
									</i> <strong>Địa chỉ:</strong> <span>425 Mạc Cửu, Vĩnh Thanh, Rạch Giá, Kiên Giang </span>
								</div>
							</div>
							<div class="single-contact">
								
								<div class="content">
									</i> <strong>Số điện thoại:</strong> <a href="tel:0985013654" title="0985013654" style="color: var(--primary1);" class="link">0985013654</a>
								</div>
							</div>
							<div class="single-contact">
								
								<div class="content">
									</i> <strong>Email:</strong> <a href="mailto:thestarofbegin@gmail.com" title="thestarofbegin@gmail.com" style="color: var(--primary1);"  class="link">thestarofbegin@gmail.com</a>
								</div>
							</div>
					</div>
				  <div align="center" style="margin-top:20px">
						<h3 align="center" class=" text-uppercase ml-2">Báo lỗi với chúng tôi</h3>
						<form name="form1"  method="POST" action="savereprt.php" onSubmit="return checkInput()">
									<div class="form-group">									
										<div class="col-sm-12">
                                            <!--Dùng required để bắt buộc người dùng phải nhập mới submid được-->
										<input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nhập đầy đủ họ tên*" >
										</div>
									</div>									
										<div class="form-group">							
											<div class="col-sm-12">
												<input type="email" name="email" class="form-control" id="email" placeholder="Email*" >
											</div>
										</div>
										
																
									<div class="form-group">							
										<div class="col-sm-12">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại*">
										</div>
									</div>
									<div class="form-group">							
										<div class="col-sm-12">
										<textarea name="comment" id="comment" class=" form-control" rows="8" placeholder="Nội dung báo cáo*" ></textarea>
										</div>
									</div>
									<div class="form-group" style="margin-top:15px"> 
										<div class="col-sm-offset-2 col-sm-10 m-auto">
										<input type="submit" name="yes"  class="btn btn-warning w-100 text-center " value="Gửi báo cáo"></input>
										</div>
									</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-6 ">
					<img src="image/reprot.jpg" style="height: 70%; margin-top:15%;" alt="" class=" img-fluid">
				</div>
			</div>
            <div align="center">
              <h1 style="font-size:36px; color:#F06"><strong>XIN CHÂN THÀNH CẢM ƠN BẠN !!! </strong></h1>
            </div>
		</div>
	</section>
    
</body>
</html>