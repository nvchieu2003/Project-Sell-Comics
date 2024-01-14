<!DOCTYPE html>
<html>
<head>
<title>Sửa Manga</title>
<!-- Unicode Tiếng Việt -->
<meta charset="utf-8"> 	
<!-- Tập tin định nghĩa css -->
<!-- <link href="site.css" rel="stylesheet" /> -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="shortcut icon" href="image/star.jpg">  
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: login.php");
?>
<style>
html {
  font-size: 12px;
  background-color:#000011;
}

.main__form .form-group { 
  position: relative;
  margin-bottom: 2rem;
}

.main__form .form-group label {
  font-family: "Quicksand", sans-serif;
  font-size: 1.6rem;
  color: #575757;
  padding: 0 2.5rem;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 0;
  -webkit-transition: .3s all;
  transition: .3s all;
}

.main__form .form-group input,
.main__form .form-group textarea {
  font-size: 1.6rem;  
  border-color: #f7f7f7;
  padding: 0 2.5rem;
  position: relative;
  z-index: 1;
  background: transparent;
}


.main__form .form-group input:focus,
.main__form .form-group textarea:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}


.main__form .form-group input:focus + label,
.main__form .form-group textarea:focus + label {
  background-color:#FF6633;
  z-index: 2;
  top: 2%;
  font-weight: 600;
}

.main__form .form-group input::-webkit-input-placeholder,
.main__form .form-group textarea::-webkit-input-placeholder {
  color: transparent;
}

.main__form .form-group input:-ms-input-placeholder,
.main__form .form-group textarea:-ms-input-placeholder {
  color: transparent;
}

.main__form .form-group input::-ms-input-placeholder,
.main__form .form-group textarea::-ms-input-placeholder {
  color: transparent;
}

.main__form .form-group input::placeholder,
.main__form .form-group textarea::placeholder {
  color: transparent;
}

.main__form .form-group input {
  height: 6rem;
}



.main__form .form-group.form-message textarea {
  padding: 2.5rem;
}



.main__form .form-group.form-message textarea:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.main__form label.btn-attached {
  background: #CC3333;
  padding: 11px 42px;
  border-radius: 3px;
  color: #fff;
  font-size: 1.6rem;
  -webkit-transition: .3s all;
  transition: .3s all;
}

.main__form label.btn-attached:hover {
  cursor: pointer;
  background: #009999;
}


.main__form button.btn.btn-get {
  position: relative;
  top: 0px;
  margin: 0 0 -80px;
  font-size:20px;
}


.project__form {
  font-size: 1.6rem;
}

.project__form h3 {
   font-family: "Quicksand", sans-serif;;
  font-size: 4.1rem;
  color: #272727;
  line-height: 8.8rem;
  color: #fff;
}

.project__form::before {
  display: none;
}

.ready__started {
  background-color:#FF9933; 
  background-size: 200% 200%;
  -webkit-animation: AnimationGradient 5s ease infinite;
          animation: AnimationGradient 5s ease infinite;
  padding: 0rem 0 5rem;
  position: relative;
}

.ready__started::before {
  content: '';
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100%;
  top: 0;
}

.ready__started p {
  color: #fff;
}

.ready__started-box {
  background: #FF9933;
  padding: 3rem;
  border-radius: 5px;
  margin-top: 0rem;
}


.ready__started-box p {
;
  font-size: 2.2rem;
  font-family: "Quicksand", sans-serif;
}

@-webkit-keyframes AnimationGradient {
  0% {
    background-position: 26% 0%;
  }
  50% {
    background-position: 75% 100%;
  }
  100% {
    background-position: 26% 0%;
  }
}

@keyframes AnimationGradient {
  0% {
    background-position: 26% 0%;
  }
  50% {
    background-position: 75% 100%;
  }
  100% {
    background-position: 26% 0%;
  }
}

section.ready__started.project__form {
  margin-bottom: 40rem;
}

section.ready__started.project__form .ready__started-box {
  position: relative;
  margin-bottom: -40rem;
  -webkit-box-shadow: 0 3px 3.2rem rgba(0, 0, 0, 0.08);
          box-shadow: 0 3px 3.2rem rgba(0, 0, 0, 0.08);
}
</style>
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<!--important link source from "https://bootsnipp.com/snippets/qNB2D"-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
<?php 

	include("connect.php");
	if(isset($_GET['id'])){
		
	
	$id = $_GET['id'];
	
	$sql= "SELECT * FROM `manga` WHERE id = '$id'";
	$rs = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_array($rs);
	
?>

<section class="ready__started project__form">
        <div class="container">
            <h3 align="center">Sửa Manga</h3>
            <div class="ready__started-box" style="margin-top: 100px">
                <form name = "form1" class="main__form" action="save_fix.php?id=<?=$row[0]?>" enctype="multipart/form-data" method="post" onSubmit="return checkInput()">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name ="tenmg" id = "tenmg" class="form-control" id="firstName" aria-describedby="firstName" placeholder="1, 2, 3, ..." value="<?=$row[2]?>" >
                                <label for="firstName" style="top: 2%;background-color:#FF9933; z-index: 2">Tên Manga</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name ="theloai" id = "theloai" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Tình cảm, chiến tranh, ..." value="<?=$row[1]?>">
                                <label for="lastName" style="top: 2%;background-color:#FF9933; z-index: 2">Thể loại</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name ="gia" id = "gia" class="form-control" id="company" aria-describedby="company" value="<?=$row[4]?>">
                                <label for="company" style="top: 2%;background-color:#FF9933; z-index: 2">Giá bán</label>
                            </div>
                            <div class="form-groups">
                      <!-- 
                        <label class="btn-attached" for="fileField"><i class="fa fa-paperclip" aria-hidden="true"></i> Hình ảnh</label>
                        <input style="display: none" type="file" name ="image" class="form-control-file" id="fileField">-->
                        <label for="formFileMultiple" class="form-label" style="background-color: #FF9933">Hình ảnh</label>
                        <input class="form-control" name="image" type="file" id="image" style="background-color: #FF9933; color:#fff; width:500px" title="<?=$row[3]?>" value="<?=$row[3]?>"/>
                        <?php echo $row[3]?>
                    </div>
                        </div>
                        <div class="col-md-6" align="center">
                        <label for="webSite" style="top: 2%;background-color:#FF9933; z-index: 2" >Mô tả</label>
                        <div class="form-group">
                                <!--<input type="text" name ="ghichu" id = "ghichu" class="form-control" id="webSite" aria-describedby="webSite" placeholder="Note: " >-->
                                
                                <textarea name="mota" id="mota" cols="50" rows="3" class="form-control" aria-describedby="webSite" value=""><?=$row[5]?></textarea></td>
                                
                                <script>CKEDITOR.replace('mota');</script>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-groups">
                        <input style="display: none" type="hiden" class="form-control-file" id="">
                    </div>
                    <div class="text-center" >
                        <button type="submit" class=" btn btn-get" style="background-color: #FF6600; width:250px;"><span>Sửa !!!</span></button></div>
                        <a href="admin.php" style="font-size: 22px; color:#800000">Quay về trang chủ admin</a>
                </form>
            </div>
        </div>
    </section>
    <?php
	}
	?>
</body>
</html>