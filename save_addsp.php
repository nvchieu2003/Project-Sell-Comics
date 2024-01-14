<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0, url=addsp.php" />
    <title>Document</title>
</head>
<body>
    <?php
        include("connect.php"); 
            $theloai=$_POST['theloai'];
            $tenmg=$_POST['tenmg'];
            $gia=$_POST['gia'];
            $mota=$_POST['mota'];
            $hinhanh=$_FILES['image']; 
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
            $sql="INSERT INTO `manga`(`theloai`, `tenmg`, `image`, `gia`, `mota`) VALUES ('$theloai', '$tenmg', 'image/$image1', '$gia', '$mota')";
            $rs = mysqli_query($conn,$sql);
                    
            if($rs){	
                echo '<script>alert("Bạn đã thêm thành công")</script>';
            }else
                echo '<script>alert("Thêm không thành công vui lòng thử lại !!!")</script>';
        }
    }
    
        ?>
</body>
</html>