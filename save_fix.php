<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0 url = admin.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connect.php");
	$id =$_GET['id'];
	$tenmg = $_POST['tenmg'];
	$theloai = $_POST['theloai'];
	$gia  = $_POST['gia'];
	$hinhanh=$_FILES['image'];
	$mota=$_POST['mota'];
if(isset($_FILES['image'])){
    if($hinhanh["error"] != 0)
	{
		echo "Dữ liệu upload bị lỗi";
		die;	
	}
	// Thư mục chứa tập tin upload
	$path = "./image/";
	$target_file = $path . basename($hinhanh["name"]);
	//echo $target_file;
	//Cho phép upload hay không
	$allow = true;
	$maxsize = 1000000;	//1MB
	//Cho phép các loại file có phần mở rộng này upload
	$allowType = array('JPG', 'GIF' , 'PNG', 'JPEG');
	if(file_exists($target_file))
	{
		echo '<script>alert("Tập tin này đã tồn tại")</script>';
		$allow = false;
	}
	if($hinhanh["size"] > $maxsize)
	{
        echo '<script>alert("Tập tin có dung lượng lớn hơn cho phép (1MB)")</script>';
		$allow = false;	
	}
	$filetype = strtoupper(pathinfo($target_file,PATHINFO_EXTENSION));
	if(!in_array($filetype,$allowType))
	{
		echo '<script>alert("Không hỗ trợ định dạng này")</script>';
        
		$allow = false;
	}
	if($allow)
	{
		if(!@move_uploaded_file($hinhanh["tmp_name"],$target_file))
		{
                echo '<script>alert("Không upload được. Hãy thử lại")</script>';
		}else{
			
			
            $image1=$hinhanh["name"];
            $sql = "UPDATE `manga` SET `theloai`= '$theloai',`tenmg`='$tenmg',`image`='image/$image1',`gia`='$gia', `mota`='$mota' WHERE `id` = '$id'";
	        $result = mysqli_query($conn, $sql);
	        if($result)
		        echo '<script>alert("Bạn đã sửa truyện thành công")</script>';
	            else
		        echo '<script>alert("Sửa truyện không thành công vui lòng thử lại !!!")</script>';
            }
    }
}else{
            $sql1 = "UPDATE `manga` SET `theloai`= '$theloai',`tenmg`='$tenmg',`gia`='$gia', `mota`='$mota' WHERE `id` = '$id'";
	        $result1 = mysqli_query($conn, $sql1);
	        if($result1)
		        echo '<script>alert("Bạn đã sửa truyện thành công")</script>';
	        else
		        echo '<script>alert("Sửa truyện không thành công vui lòng thử lại !!!")</script>';
}

	/*$sql = "UPDATE `manga` SET `theloai`= '$theloai',`tenmg`='$tenmg',`image`='image/$image',`gia`='$gia', `mota`='$mota' WHERE `id` = '$id'";
	$result = mysqli_query($conn, $sql);
	if($result)
		echo '<script>alert("Bạn đã sửa truyện thành công")</script>';
	else
		echo '<script>alert("Sửa truyện không thành công vui lòng thử lại !!!")</script>';*/
	
?>
</body>
</html>