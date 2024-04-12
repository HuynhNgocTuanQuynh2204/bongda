<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">   
        <section class="table__header">
            <h1>Danh sách dự đoán tỉ số</h1>
        </section>
        <?php
              $sql = "SELECT * FROM dudoan,nguoidung,trandau WHERE dudoan.MaNguoiDung = nguoidung.MaNguoiDung AND dudoan.MaTran = trandau.MaTran  ORDER BY dudoan.MaDuDoan DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Người dự đoán<span class="icon-arrow"></span></th>
                        <th>Trận đấu<span class="icon-arrow"></span></th>
                        <th>Kết quả<span class="icon-arrow"></span></th>
                        <th>Thời gian dự đoán<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['TenNguoiDung']; ?></td>
                        <td><?php echo $row['MaTran']; ?></td>
                        <td><?php echo $row['KetQua']; ?></td>
                        <td><?php echo $row['ThoiGianDuDoan']; ?></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>