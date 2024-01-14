<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0, url=addsp.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connect.php");
$tendn = $_POST['tendn'];
$hoten = $_POST['hoten'];
$matkhau = md5($_POST['matkhau']);
$email = $_POST['email'];

$sql0="SELECT tendn FROM nguoidung WHERE tendn='$tendn'";
$result0=mysqli_query($conn, $sql0);
 if (mysqli_num_rows($result0)>0)
    {
        echo '<script>alert("Tên đăng nhập hoặc Email đã tồn tại. Vui lòng thử lại")</script>';
		exit;
    }

$sql1="SELECT email FROM nguoidung WHERE email='$email'";
$result1=mysqli_query($conn, $sql1);
 if (mysqli_num_rows($result1)>0)
    {
        echo '<script>alert("Tên đăng nhập hoặc Email đã tồn tại. Vui lòng thử lại")</script>';
		exit;
    }

$sql = "INSERT INTO `nguoidung` ( `tendn` , `hoten` , `matkhau` , `email` ) VALUES ('$tendn','$hoten','$matkhau','$email')";
$rs = mysqli_query($conn, $sql);
if($rs)
		echo '<script>alert("Bạn đã tạo tài khoản thành công")</script>';
	else
	
	echo '<script>alert("Tạo tài khoản thất bại. Vui lòng thử lại")</script>';;
?>
</body>
</html>