<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0 url = cart.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connect.php");
	if(!isset($_GET['id'])){
		$sql1 = "DELETE FROM `giohang`";
	    $result1 = mysqli_query($conn, $sql1);
	if($result1)
	    echo '<script>alert("Bạn đã xóa tất cả sản phẩm khỏi giỏ hàng thành công")</script>';
	else
		echo '<script>alert("Xóa sản phẩm thất bại !!!")</script>';
	}else{
	$id =$_GET['id'];
	
	//$sql = "DELETE FROM `manga` WHERE id = '$id'";
	$sql = "DELETE FROM `giohang` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if($result)
	    echo '<script>alert("Bạn đã xóa sản phẩm khỏi giỏ hàng thành công")</script>';
	else
		echo '<script>alert("Xóa sản phẩm thất bại !!!")</script>';
	}
?>
</body>
</html>