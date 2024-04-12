<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
 $tencauthu = $_POST['tencauthu'];
 $quoctich = $_POST['quoctich'];
 $vitri = $_POST['vitri'];
 $clb = $_POST['clb'];
 

 if(isset($_POST['themcauthu'])){
    $sql = "INSERT INTO cauthu(TenCauThu, QuocTich, ViTri, MaCLB) VALUES ('$tencauthu', '$quoctich', '$vitri', '$clb')";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Thêm cầu thủ thành công");    window.location.href = "index.php?quanly=cauthu"; </script>';
 }else if(isset($_POST['suacauthu'])){
    $id_ct = $_GET['idct'];
    $sql = "UPDATE cauthu SET TenCauThu = '$tencauthu', QuocTich = '$quoctich', ViTri = '$vitri', MaCLB = '$clb' WHERE MaCauThu = '$id_ct'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Sửa cầu thủ thành công");    window.location.href = "index.php?quanly=cauthu"; </script>';
 }else{
    $id_ct = $_GET['idct'];
    $sql = "DELETE FROM cauthu WHERE MaCauThu = '$id_ct'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa cầu thủ thành công");    window.location.href = "index.php?quanly=cauthu"; </script>';
 }


?>