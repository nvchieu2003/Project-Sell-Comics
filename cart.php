<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Giỏ hàng</title>
<link rel="shortcut icon" href="image/star.jpg">  
<script language="javascript">
function ThongBao(){
return confirm("Bạn có chắc muốn xóa sản phẩm này trong giỏ hàng?");	
}
function ThongBaoAll(){
return confirm("Bạn có chắc muốn xóa tất cả sản phẩm trong giỏ hàng ?");	
}
</script>
<style type="text/css">.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
    vertical-align: middle;
    }
     
    @media screen and (max-width: 600px) { 
    table#cart tbody td .form-control { 
    width:20%; 
    display: inline !important;
    } 
     
    .actions .btn { 
    width:36%; 
    margin:1.5em 0;
    } 
     
    .actions .btn-info { 
    float:left;
    } 
     
    .actions .btn-danger { 
    float:right;
    } 
     
    table#cart thead {
    display: none;
    } 
     
    table#cart tbody td {
    display: block;
    padding: .6rem;
    min-width:320px;
    } 
     
    table#cart tbody tr td:first-child {
    background: #333;
    color: #fff;
    } 
     
    table#cart tbody td:before { 
    content: attr(data-th);
    font-weight: bold; 
    display: inline-block;
    width: 8rem;
    } 
     
    table#cart tfoot td {
    display:block;
    } 
    table#cart tfoot td .btn {
    display:block;
    }
    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/footerlast.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="css/items.css" rel="stylesheet"> 
  <script language="javascript">
	  function ThanhTien(){
	  	var soluong=document.getElementsByName('sluong[]');
		var gia=document.getElementsByName('gia[]');
		var thanhTien=document.getElementsByName('thanhTien[]');
		var tongTien=0;
		var i;
		for(i=0; i<soluong.length; i++)
		{
			thanhTien[i].value=(gia[i].value*soluong[i].value)*1000;
			tongTien += Number(thanhTien[i].value);
		}
		document.getElementById('tongTien').value=tongTien;
	}
	</script>
</head>

<body>
<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: login.php");
?>
<?php 
include("connect.php");
		$user=$_SESSION['user'];
		$tongTien=0;
		$sql="SELECT * from giohang WHERE user ='$user'";
		$rs = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($rs);
		if($num>0){
			
?>
	<h1 class="text-center" style="color:orangered; margin-bottom: 100px;" ><b>GIỎ HÀNG THE STAR OF BEGIN</b></h1  >

  <div class="container"> 
   <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
    
     <tr> 
      <th style="width:50%">Tên sản phẩm</th> 
      <th style="width:10%">Giá</th> 
      <th style="width:8%">Số lượng</th> 
      <th style="width:22%" class="text-center">Thành tiền</th> 
      <th style="width:10%"><label onclick="return ThongBaoAll();"><a href="delete_gh.php" class="btn btn-default ">
    <i class="bi bi-trash"></i>  
</a></label></th> 
     </tr> 
     <?php
		while ($row = mysqli_fetch_assoc($rs)) {
			$image=	$row['image'];
			$tenmg= $row['tenmg'];
			$theloai=$row['theloai'];
			$gia=$row['gia'];
			$id=$row['id'];
			$tongTien=$tongTien+$gia;
			
	?>
    </thead> 
    <tbody><form name="form2" action="delete_gh.php?id=<?=$id?>" method="post"><tr> 
     <td data-th="Product"> 
      <div class="row"> 
       <div class="col-sm-2 hidden-xs"><img src="<?=$image?>" alt="Sản phẩm 1" class="img-responsive" width="100">
       </div> 
       <div class="col-sm-10"> 
        <h4 class="nomargin"><?=$tenmg?></h4> 
        <p><?=$theloai?></p> 
       </div> 
      </div> 
      
     </td> 
     <td data-th="Price"><input type="hidden" name="gia[]" id="gia" value="<?=$gia?>"> <?=$gia?>.000 VNĐ</td> 
         <td data-th="Quantity"><input class="form-control text-center" value="1" type="number" name="sluong[]" id="sluong" min="1" onchange="return ThanhTien()" />
         </td> 
         <td data-th="Subtotal" class="text-center"><input name="thanhTien[]" type="text" id="thanhTien" value="<?=$gia*1000?>" size="15" readonly="readonly" style="border:none; font-size:16px; margin-left:95px"></td> 
         <td class="actions" data-th="">
         <input type="hidden" name="id" id="id" value="<?=$id?>">
        <a href="delete_gh.php?id=<?=$id?>"> <button class="btn btn-danger btn-sm" name="dlt" onclick="return ThongBao();" >X<i class="fa fa-trash-o"></i></button></a>
     </td> 
     </form>
    </tr> 
    
    </tbody><tfoot>  
    <?php
		}
		?>
     <tr> 
      <td><a href="afterlogin.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
      </td> 
      <td colspan="2" class="hidden-xs"> </td>
      
      <td class="hidden-xs text-center" style="font-size:14px"><strong >Tổng tiền:  </strong><input type="text" name="tongTien" id="tongTien" value="<?= $tongTien * 1000?>" style="border:none" readonly="readonly" >
      </td>
      <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
      </td> 
     </tr> 
    </tfoot> 
   </table>
   
   <?php
	}else{
			echo "<div align='center' style='margin-bottom:25px; margin-top:28px' >"."<h3>"."Hiện tại không có sản phẩm nào trong giỏ hàng"."</h3>"."</div>";
	?>
					<div align="center" style="margin-bottom:70px"><img src="image/cart.jpg" width="750px" height="550px"></div>
                    <p align="center"><a href="afterlogin.php" class="btn btn-success" style="width:500px"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng thôiii</a></p>
            <?php
				}
			?>
   </div>
<footer class="footer" style="margin-top:170px">
        <div class="row">
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
<?php
/*
	 	if(isset($_POST['id'])){
			$id=$_POST['id'];
			$sql4="DELETE FROM `giohang` WHERE id='$id'";
			$rs4 = mysqli_query($conn,$sql4);
			exit;
		}*/
?>

<script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>