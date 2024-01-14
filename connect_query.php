<?php
include("connect.php");
$sql  = "Select * from nguoidung";
$result = mysqli_query($conn, $sql);
echo "Có ". mysqli_num_rows($result)." mẫu tin";
?> 