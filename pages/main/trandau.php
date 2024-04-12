<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Danh sách trận đấu</h1>
        </section>
        <?php
              $sql = "SELECT * FROM trandau  ORDER BY MaTran DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <a href="index.php?quanly=themtrandau" class="btn btn-outline-success" style="padding: 5px;margin-left: 1000px;">Thêm trận đấu</a>
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Đội nhà<span class="icon-arrow"></span></th>
                        <th>Đội khách<span class="icon-arrow"></span></th>
                        <th>Ngày thi đấu<span class="icon-arrow"></span></th>
                        <th>Kết quả<span class="icon-arrow"></span></th>
                        <th>Sửa <span class="icon-arrow"></span></th>
                        <th>Xóa<span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['DoiNha']; ?></td>
                        <td><?php echo $row['DoiKhach']; ?></td>
                        <td><?php echo $row['NgayThiDau']; ?></td>
                        <td><?php echo $row['KetQua']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suatrandau&matran=<?php echo $row['MaTran']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemtrandau&matran=<?php echo $row['MaTran']; ?>">Xóa </a></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>