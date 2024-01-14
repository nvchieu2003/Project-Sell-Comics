<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="shortcut icon" href="image/star.jpg">  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/login.css">
    <script language="javascript">
	function checkInput(){
	if(document.form1.user.value == "")
	{
		alert("Bạn hãy nhập tên đăng nhập");
		document.form1.user.focus();
		return false;	
	}
	if(document.form1.pass.value == "")
	{
		alert("Bạn hãy nhập mật khẩu");
		document.form1.pass.focus();
		return false;	
	}
	return true;
	}
	</script>
</head>
<body>
<?php
session_start();
include("connect.php");
if(isset($_POST['user']) and ($_POST['pass']))
{
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$sql = "SELECT * FROM nguoidung WHERE tendn='$user' and matkhau='$pass'";
	
	$rs = mysqli_query($conn, $sql);
	if($user=="chieuadmin" and $pass=="827ccb0eea8a706c4c34a16891f84e7b" or $user=="thuadmin" and $pass=="827ccb0eea8a706c4c34a16891f84e7b"){
		$_SESSION['user']=$user;
		header("Location: admin.php");
	}else{
	if(mysqli_num_rows($rs)>0 and $user != "chieuadmin" and $user != "thuadmin"){
			$_SESSION['user']=$user;	//tạo phiên làm việc cho user
			//header("Location: admin\admin.php");
			header("Location: afterlogin.php");
	}
	else{
		echo '<script>alert("Đăng nhập không thành công. Tên đăng nhập hoặc mật khẩu sai!!!")</script>';
	}
	}
}
?>

    <form name="form1" class="box" action="" method="post" onSubmit="return checkInput()">
        <h1>Đăng nhập</h1>
        <input type="text" name="user" id="user"placeholder="Tên đăng nhập" >
        <input type="password" name="pass" id="pass" placeholder="Mật khẩu" >
        <input type="submit" name="" value="Đăng nhập">
        <a href="" class="forgot">Quên mật khẩu/Tên đăng nhập ?</a>
        <br>
        <br>
        <a href="register.php">Tạo tài khoản </a>
    </form>
</body>
</html>