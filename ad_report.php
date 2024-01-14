<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"><!--font chữ-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!--icon-->
<link rel="shortcut icon" href="image/star.jpg">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-The Star Of Begin</title>
</head>
<script language="javascript">
function ThongBao(){
return confirm("Bạn có chắc muốn xóa truyện?");	
}
function ThongBao2(){
return confirm("Bạn chắc muốn đăng xuất ?");	
}
</script>
<script src="js/jquery-1.11.1.min.js"></script>
<style type="text/css">
.panel-table .panel-body {  
padding:0;
}
.panel-table .panel-body .table-bordered {  
border-style: none; 
margin:0;
}
.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type { 
text-align:center;  width: 100px;}.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type, .panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {  
border-right: 0px;
}
.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type, .panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {  
border-left: 0px;
}
.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td { 
border-bottom: 0px;
}
.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th { 
border-top: 0px;
}
.panel-table .panel-footer .pagination {    
margin:0;
}
.panel-table .panel-footer .col {   
line-height: 34px;  
height: 34px;
}
.panel-table .panel-heading .col h3 {   
line-height: 30px;  
height: 30px;
}
.panel-table .panel-body .table-bordered > tbody > tr > td {   
line-height: 34px;
}
</style>

<body>
<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: login.php");
?>
<?php
include("connect.php");
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
		$sql="SELECT * from baoloi";
		$rs = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($rs);
		
		if(mysqli_num_rows($rs)==0)
	{
		echo "Không có dữ liệu";
	}
	else
	{
?>


	<h1 class="text-center" style="color:orangered; margin-bottom: 70px; font-size:55px" ><b>THE STAR OF BEGIN</b>
<a href="logout.php" onclick="return ThongBao2()"><button type="button" style="float:right; margin-right: 150px ; background-color:#FF9966; color: #009966" class="btn btn-secondary"><i class="uil uil-signout"></i> <b> Đăng xuất</b></button></a>
</h1>  
<div align="center"><img src="image/admin_bn.jpg" height="250px" width="650px"></div> 
<div class="container"> 
   <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
  
<div class="container"> 
 <div class="row"> 
  <h1 class="text-center" style="color:#F63"><b>CHÀO MỪNG '<?=$user?>' đã đến The Star Of Begin</b></h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title" align="center"><b>Danh sách báo cáo của người dùng</b></h3> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        
        <th class="hidden-xs" width="50px">ID</th> 
        <th width="200px">Họ tên</th> 
        <th width="370px">Email</th> 
         <th width="120px">Số điện thoại</th> 
         <th width="250px">Nội dung báo cáo</th>
       </tr> 
      </thead> 
      <?php while ($row = mysqli_fetch_assoc($rs)) {
		 	$hoten= $row['hoten'];
			$email=$row['email'];
			$sodienthoai= $row['sodienthoai'];
			$noidungbaoloi=$row['noidungbaoloi'];
			$id=$row['id'];
	?>
      <tbody>
      <tr> 
       
       <td class="hidden-xs"><?=$id?></td> 
       <td ><?=$hoten?></td> 
       <td ><?=$email?></td> 
        <td><?=$sodienthoai?></td>
        <td><?=$noidungbaoloi?></td>  
      </tr> 
     </tbody>
           <?php
			}
		}
	}
?>
     </table> 
    </div> 
    <div class="panel-footer"> 
     <div class="row"> 
      <div class="col col-xs-4"><a href="admin.php" style="font-size: 17px"> <i class="uil uil-corner-up-left-alt" ></i> Quay về trang chủ admin</a></div> 
      <div class="col col-xs-8"> 
       
       <ul class="pagination visible-xs pull-right"> 
        <li><a href="">«</a>
        </li> 
        <li><a href="">»</a>
        </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div>
<script src="js/navbar.js" ></script>
</body>
</html>