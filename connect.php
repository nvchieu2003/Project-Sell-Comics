<?php
$conn = mysqli_connect ("localhost", "root", "") 
or die ("Không thể kết nối với CSDL");
mysqli_select_db ($conn, "doanweb") 
or die ("Không thể kết nối với database name");

//mysqli_set_charset($conn, 'UTF-8');
?>
