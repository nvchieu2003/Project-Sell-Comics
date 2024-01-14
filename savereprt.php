<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0, url=index.php" />

<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
	include("connect.php");	
$hoten = $_POST['fullname'];
$email = $_POST['email'];
$sodienthoai = $_POST['phone'];
$noidungbaoloi = $_POST['comment'];


$sql = "INSERT INTO `baoloi`( `hoten` , `email` , `sodienthoai` , `noidungbaoloi` ) VALUES ('$hoten','$email','$sodienthoai','$noidungbaoloi')";

$rs = mysqli_query($conn, $sql);

	if(!$rs)
	{
		echo 	"Bạn báo lỗi không thành công";
		header("Location: report.php");
	}
mysqli_close($conn);
	echo '<script>alert("Bạn đã báo lỗi thành công")</script>';
?>
		
</body>
</html>