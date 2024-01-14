<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1 url=login.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	include("connect.php");
	$user = $_SESSION['user'];
	$oldpass = md5($_POST['oldpass']);
	$newpass = md5($_POST['newpass']);
	$sql="SELECT * FROM nguoidung WHERE `tendn`='$user' and `matkhau`='$oldpass'";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$upd="UPDATE `nguoidung` SET `matkhau`='$newpass' WHERE `tendn`='$user'";
		$rs=mysqli_query($conn, $upd);
		if($rs)
			echo '<script>alert("Thay đổi mật khẩu thành công")</script>';
		else
			echo '<script>alert("Thay đổi mật khẩu không thành công")</script>';
	}else{
		echo '<script>alert("Tài khoản không tồn tại")</script>';
	}
?>
</body>
</html>