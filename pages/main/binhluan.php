<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Danh sách bình luận</h1>
        </section>
        <?php
              $sql = "SELECT * FROM binhluan,nguoidung,trandau,tintuc WHERE binhluan.MaNguoiDung = nguoidung.MaNguoiDung AND binhluan.MaTran = trandau.MaTran AND binhluan.MaTin = tintuc.MaTin  ORDER BY binhluan.MaBinhLuan DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Người dùng<span class="icon-arrow"></span></th>
                        <th>Trận đấu<span class="icon-arrow"></span></th>
                        <th>Tin tức<span class="icon-arrow"></span></th>
                        <th>Nội dung <span class="icon-arrow"></span></th>
                        <th>Ngày bình luận <span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['TieuDe']; ?></td>
                        <td><?php echo $row['NoiDung']; ?></td>
                        <td><?php echo $row['NgayBinhLuanNgayBinhLuan']; ?></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>