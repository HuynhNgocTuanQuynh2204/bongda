<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">
<form class="form-inline" action="index.php?quanly=timkiemformnguoidung" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên người dùng " aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
   
        <section class="table__header">
            <h1>Danh sách người dùng</h1>
        </section>
        <?php
              $sql = "SELECT * FROM nguoidung  ORDER BY MaNguoiDung DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Tên người dùng<span class="icon-arrow"></span></th>
                        <th>Email<span class="icon-arrow"></span></th>
                        <th>Mật khẩu<span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['MatKhau']; ?></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>