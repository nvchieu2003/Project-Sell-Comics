<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
  <meta http-equiv="refresh" content="0 url = cart.php" />
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
	if(isset($_GET['id'])){
		$id=$_GET['id']; 
		$tongTien=0;
		$sql="SELECT * from manga WHERE id ='$id'";
		$rs = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($rs);
		if($num>0){
			while ($row = mysqli_fetch_assoc($rs)) {
			$image=	$row['image'];
			$tenmg= $row['tenmg'];
			$theloai=$row['theloai'];
			$gia=$row['gia'];
			$user=$_SESSION['user'];
			$sql1 = "INSERT INTO `giohang`( `user`,`tenmg` ,`theloai`, `image`, `gia`) VALUES ('$user','$tenmg','$theloai','$image', '$gia')";
			$rs1 = mysqli_query($conn, $sql1);
            if($rs1){
                echo '<script>alert("Đã thêm sản phẩm vào giỏ hàng")</script>';
            }
			}
		}
    }
?>
 
<script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>