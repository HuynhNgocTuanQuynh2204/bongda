<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
 $doinha = $_POST['doinha'];
 $doikhach = $_POST['doikhach'];
 $ngaythidau = $_POST['ngaythidau'];
 $ketqua = $_POST['ketqua'];

 

 if(isset($_POST['themtrandau'])){
    $sql = "INSERT INTO trandau(DoiNha, DoiKhach, NgayThiDau,KetQua) VALUES ('$doinha', '$doikhach', '$ngaythidau', '$ketqua')";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Thêm trận đấu thành công");    window.location.href = "index.php?quanly=trandau"; </script>';
 }else if(isset($_POST['suatrandau'])){
    $matran = $_GET['matran'];
    $sql = "UPDATE trandau SET DoiNha = '$doinha', DoiKhach = '$doikhach', NgayThiDau = '$ngaythidau', KetQua = '$ketqua' WHERE MaTran = '$matran'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Sửa trận đấu thành công");    window.location.href = "index.php?quanly=trandau"; </script>';
 }else{
    $matran = $_GET['matran'];
    $sql = "DELETE FROM trandau WHERE MaTran = '$matran'";
    $result = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa trận đấu thành công");    window.location.href = "index.php?quanly=trandau"; </script>';
 }


?>