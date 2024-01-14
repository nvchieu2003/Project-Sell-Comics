<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/register1.css">
    
    <title>Register</title>
    <script language="javascript">
	function checkInput(){
	if(document.form1.hoten.value == "")
	{
		alert("Bạn hãy nhập họ tên của bạn");
		document.form1.hoten.focus();
		return false;	
	}
	if(document.form1.tendn.value == "")
	{
		alert("Bạn hãy nhập tên đăng nhập");
		document.form1.tendn.focus();
		return false;	
	}
	if(document.form1.email.value == "")
	{
		alert("Bạn hãy nhập email");
		document.form1.email.focus();
		return false;	
	}
	if(document.form1.matkhau.value == "")
	{
		alert("Bạn hãy nhập mật khẩu");
		document.form1.matkhau.focus();
		return false;	
	}
	if(document.form1.nhaplaimk.value == "")
	{
		alert("Bạn hãy xác nhận lại mật khẩu");
		document.form1.nhaplaimk.focus();
		return false;	
	}
	if(document.form1.matkhau.value != document.form1.nhaplaimk.value)
	{
		alert("Xác nhận mật khẩu lỗi");
		document.form1.nhaplaimk.focus();
		return false;	
	}
	}
	</script>
</head>
<body>
<form name="form1" method="post" action="savelogin.php" onSubmit="return checkInput()">
  <div align="center" class="box">
  	<h1>Đăng kí tài khoản</h1>
    <table width="420" height="245" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><p>Họ và tên:</p>
          <label for="hoten"></label>
          <input name="hoten" type="text" id="hoten" size="60" placeholder="vd:Nguyễn Văn A" >
          </td>
      </tr>
      <tr>
        <td><p>Tên đăng nhập:</p>
          <label for="tendn"></label>
          <input name="tendn" type="text" id="tendn" size="60" placeholder="Username:BoySoSad" >
       </td>
      </tr>
      <tr>
        <td><p>Email:</p>
          <label for="email"></label>
          <input name="email" type="email" id="email" size="60" placeholder="vd:thestarofbegin@gmail.com" style="height:24px" >
        </td>
      </tr>
      <tr>
        <td><p>Tạo mật khẩu:</p>
          <label for="matkhau"></label>
          <input name="matkhau" type="password" id="matkhau" size="33" maxlength="35" placeholder="abc@123" > 
        </td>
      </tr>
      <tr>
        <td><p>Nhập lại mật khẩu:</p>
          <label for="nhaplaimk"></label>
          <input name="nhaplaimk" type="password" id="nhaplaimk" size="33" maxlength="35" placeholder="abc@123" >
        </td>
      </tr>
      <tr>
        <td><p>Giới tính:</p>
        <p class="gt">
          <label>
<input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="radio" checked>
Nam</label>
          <label>
            <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
            Nữ</label>
          <label>
            <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
            Khác</label>
          <br>
        </p>
        Bạn đã có tài khoản? Đăng nhập <a href="login.php" style="color: brown;">tại đây</a></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <input type="submit" name="button" id="button" value="Đăng kí">
        </div></td>
      </tr>
    </table>
  </div>
</form>
    
</body>
</html>