<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/repass.css">
    <script language="javascript">
	function checkInput(){
		if(document.form1.user.value == "")
	{
		alert("Bạn hãy nhập mật khẩu cũ");
		document.form1.user.focus();
		return false;	
	}
	if(document.form1.user.value == "")
	{
		alert("Bạn hãy nhập tên đăng nhập");
		document.form1.user.focus();
		return false;	
	}
	if(document.form1.oldpass.value == "")
	{
		alert("Bạn hãy nhập mật khẩu cũ");
		document.form1.oldpass.focus();
		return false;	
	}
	if(document.form1.newpass.value == "")
	{
		alert("Bạn hãy nhập mật khẩu mới");
		document.form1.newpass.focus();
		return false;	
	}
	if(document.form1.repass.value == "")
	{
		alert("Bạn hãy nhập lại mật khẩu mới");
		document.form1.repass.focus();
		return false;	
	}
	if(document.form1.newpass.value != document.form1.repass.value)
	{
		alert("Xác nhận mật khẩu lỗi");
		document.form1.repass.focus();
		return false;	
	}
	return true;
	}
	</script>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: login.php");
?>


    <form name="form1" class="box" action="change_pass.php" method="post" onSubmit="return checkInput()">
        <h1>Đổi mật khẩu</h1>
        <input type="text" name="user" id="user"placeholder="Tên đăng nhập *" >
        <input type="password" name="oldpass" id="pass" placeholder="Mật khẩu cũ *" >
        <input type="password" name="newpass" id="pass" placeholder="Mật khẩu mới *">
        <input type="password" name="repass" id="pass" placeholder="Nhập lại mật khẩu mới *">
        <input type="submit" name="" value="Thay đổi">
    </form>
</body>
</html>