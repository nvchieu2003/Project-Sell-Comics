<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0 url = ad_cmt.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connect.php");
	$id =$_GET['id'];
	
	$sql = "DELETE FROM `gopy` WHERE id = '$id'";
	//$sql2 = "DELETE FROM `giohang` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if($result)
	    echo '<script>alert("Bạn đã xóa góp ý thành công")</script>';
	else
		echo '<script>alert("Xóa góp ý thất bại !!!")</script>';
	
?>
</body>
</html>