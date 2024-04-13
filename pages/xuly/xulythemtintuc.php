<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
 $tieude = $_POST['tieude'];
 $noidung = $_POST['noidung'];
 $loaitin = $_POST['loaitin'];

 

 if(isset($_POST['themtintuc'])){
    $sql = "INSERT INTO tintuc(TieuDe, NoiDung, NgayDang,IDtin) VALUES ('$tieude', '$noidung', '$now','$loaitin')";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Thêm tin tức thành công");    window.location.href = "index.php?quanly=tintuc"; </script>';
 }else if(isset($_POST['suatintuc'])){
    $matin = $_GET['matin'];
    $sql = "UPDATE tintuc SET TieuDe = '$tieude', NoiDung = '$noidung', NgayDang = '$now', IDtin = '$loaitin' WHERE MaTin = '$matin'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Sửa tin tức thành công");    window.location.href = "index.php?quanly=tintuc"; </script>';
 }else{
    $matin = $_GET['matin'];
    $sql = "DELETE FROM tintuc WHERE MaTin = '$matin'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa tin tức thành công");    window.location.href = "index.php?quanly=tintuc"; </script>';
 }


?>