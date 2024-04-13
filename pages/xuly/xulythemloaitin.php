<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
 $tenloaitin = $_POST['tenloaitin'];
 
 

 if(isset($_POST['themloaitin'])){
    $sql = "INSERT INTO loaitin(TenLoaiTin) VALUES ('$tenloaitin')";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Thêm loại tin thành công");    window.location.href = "index.php?quanly=loaitin"; </script>';
 }else if(isset($_POST['sualoaitin'])){
    $loaitin = $_GET['loaitin'];
    $sql = "UPDATE loaitin SET TenLoaiTin = '$tenloaitin'WHERE IDtin = '$loaitin'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Sửa loại tin thành công");    window.location.href = "index.php?quanly=loaitin"; </script>';
 }else{
    $loaitin = $_GET['loaitin'];
    $sql = "DELETE FROM loaitin WHERE IDtin = '$loaitin'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa loại tin thành công");    window.location.href = "index.php?quanly=loaitin"; </script>';
 }


?>