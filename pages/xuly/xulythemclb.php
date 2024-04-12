<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
 $tenclb = $_POST['tenclb'];
 $tinh = $_POST['tinh'];
 

 if(isset($_POST['themclb'])){
    $sql = "INSERT INTO caulacbo(TenCLB, Tinh) VALUES ('$tenclb', '$tinh')";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Thêm CLB thành công");    window.location.href = "index.php?quanly=clb"; </script>';
 }else if(isset($_POST['suaclb'])){
    $id_clb = $_GET['idclb'];
    $sql = "UPDATE caulacbo SET TenCLB = '$tenclb', Tinh = '$tinh'WHERE MaCLB = '$id_clb'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Sửa CLB thành công");    window.location.href = "index.php?quanly=clb"; </script>';
 }else{
    $id_clb = $_GET['idclb'];
    $sql = "DELETE FROM caulacbo WHERE MaCLB = '$id_clb'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa CLB thành công");    window.location.href = "index.php?quanly=clb"; </script>';
 }


?>