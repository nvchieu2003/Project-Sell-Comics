<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="image/star.jpg">  
    <title>Đăng ký</title>
    <style>
    body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #34495e;
}
.box{
	height:530px;
    width: 400px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /*di chuyển phần tử bên trong theo trục xy*/
    background: #191919;
    text-align: center;
    border-radius: 19px;
}
.box h1{
    color:#ede7e1;
    text-transform: uppercase;
    font-weight: 500;
}
p{
    color: #fff;
    margin-right: 290px;
	font-size:19px;
}
.gt{
    color: aqua;
    margin-right: 100px;
}
.box input[type="text"], .box input[type="password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 300px;
    height: 3px;
    outline: none;/*Đường kẻ xung quanh */
    color: white;
    border-radius: 3px;
    transition: 0.25s;
}

/*dùng focus khi click chuột vào 2 ô sẽ to lên theo độ rộng đc gán bên dưới*/
.box input[type="text"]:focus,.box input[type="password"]:focus{
    height: 10px;
    width: 370px;
    border-color: #e9bf1b;
}
.box input[type="submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.v{
    margin-top: 40px;
    margin-right: 70px;
    color: #fff;
}
.box input[type="submit"]:hover{
    background: #e9bf1b;
    border-color: darkorange;
}
.box a.forgot{
    text-decoration: none;
}
</style>
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
    <form name="form1" class="box" action="savelogin.php" method="post" onSubmit="return checkInput()">
        <h1><strong>Đăng kí tài khoản</strong></h1>
        <input type="text" name="hoten" id="hoten"placeholder="Họ tên: (Nguyen Van A) *" >
        <input type="text" name="tendn" id="tendn" placeholder="Tên đăng nhập: (Username:BoySoSad) *">
        <input type="text" name="email" id="email" placeholder="email: (thestarofbegin@gmail.com) *" >
        <input type="password" name="matkhau" id="matkhau" placeholder="Tạo Mật khẩu: (abc@123) *" >
        <input type="password" name="nhaplaimk" id="nhaplaimk" placeholder="Nhập lại Mật khẩu: (abc@123) *" >
        <p>Giới tính:</p>
            <div class="gt">
        <label>
  <input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="radio" checked>
  Nam</label>
            <label>
              <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
              Nữ</label>
            <label>
              <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
              Khác</label>

        </div>
        <div class="v">
        Bạn đã có tài khoản? Đăng nhập <a href="login.php" style="color: brown;">tại đây</a>
    </div >
    <br>
        <input type="submit" name="" value="Tạo tài khoản">
    </form>
    
</body>
</html>