<section class="home-section">
  <div class="text">Dashboard</div>

  <div class="admin-content">
    <h2>Tin tức</h2>
    <?php
$sql = "SELECT * FROM tintuc ORDER BY MaTin LIMIT 3";
$query = mysqli_query($mysqli,$sql);
?>
    <ul class="list">
      <?php
      while($row_tintuc = mysqli_fetch_array($query)){
      ?>
      <li><?php echo $row_tintuc['TieuDe']  ?></li>
      <?php
      }
      ?>
    </ul>
    <h2>Trận đấu</h2>
    <?php
$sql_trandau = "SELECT * FROM trandau ORDER BY MaTran LIMIT 3";
$query_trandau = mysqli_query($mysqli,$sql_trandau);
?>
    <ul class="list">
    <?php
      while($row_trandau= mysqli_fetch_array($query_trandau)){
      ?>
      <li><?php echo $row_trandau['DoiNha']  ?> <b style="color: red;">VS</b> <?php echo $row_trandau['DoiKhach']  ?> </li>
      <?php
      }
      ?>
    </ul>
    <h2>Cầu thủ</h2>
    <?php
$sql_cauthu= "SELECT * FROM cauthu ORDER BY MaCauThu LIMIT 3";
$query_cauthu = mysqli_query($mysqli,$sql_cauthu);
?>
    <ul class="list">
    <?php
      while($row_cauthu= mysqli_fetch_array($query_cauthu)){
      ?>
      <li><?php echo $row_cauthu['TenCauThu']  ?> </li>
      <?php
      }
      ?>
    </ul>
    <h2>CLB</h2>
    <?php
$sql_clb= "SELECT * FROM caulacbo ORDER BY MaCLB LIMIT 3";
$query_clb = mysqli_query($mysqli,$sql_clb);
?>
    <ul class="list">
    <?php
      while($row_clb= mysqli_fetch_array($query_clb)){
      ?>
      <li><?php echo $row_clb['TenCLB']  ?> </li>
      <?php
      }
      ?>
    </ul>
    <h2>Dự đoán</h2>
    <?php
$sql_dudoan= "SELECT * FROM dudoan ORDER BY MaDuDoan LIMIT 3";
$query_dudoan = mysqli_query($mysqli,$sql_dudoan);
?>
    <ul class="list">
    <?php
      while($row_dudoan= mysqli_fetch_array($query_dudoan)){
      ?>
      <li><?php echo $row_dudoan['KetQua']  ?> </li>
      <?php
      }
      ?>
    </ul>
    <h2>Người dùng</h2>
    <?php
$sql_nguoidung= "SELECT * FROM nguoidung ORDER BY MaNguoiDung LIMIT 3";
$query_nguoidung= mysqli_query($mysqli,$sql_nguoidung);
?>
    <ul class="list">
    <?php
      while($row_nguoidung= mysqli_fetch_array($query_nguoidung)){
      ?>
      <li><?php echo $row_nguoidung['TenNguoiDung']  ?> </li>
      <?php
      }
      ?>
    </ul>
    <h2>Bình luận</h2>
    <?php
$sql_binhluan= "SELECT * FROM binhluan ORDER BY MaBinhLuan LIMIT 3";
$query_binhluan = mysqli_query($mysqli,$sql_binhluan);
?>
    <ul class="list">
    <?php
      while($row_binhluan= mysqli_fetch_array($query_binhluan)){
      ?>
      <li><?php echo $row_binhluan['NoiDung']  ?> </li>
      <?php
      }
      ?>
    </ul>
  </div>
</section>