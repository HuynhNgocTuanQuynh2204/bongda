<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">
<form class="form-inline" action="index.php?quanly=timkiemformclb" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên clb " aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
   
        <section class="table__header">
            <h1>Danh sách câu lạc bộ</h1>
        </section>
        <?php
              $sql = "SELECT * FROM caulacbo  ORDER BY MaCLB DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <a href="index.php?quanly=themclb" class="btn btn-outline-success" style="padding: 5px;margin-left: 1000px;">Thêm CLB</a>
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Tên CLB<span class="icon-arrow"></span></th>
                        <th>Tỉnh<span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['TenCLB']; ?></td>
                        <td><?php echo $row['Tinh']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suaclb&idclb=<?php echo $row['MaCLB']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemclb&idclb=<?php echo $row['MaCLB']; ?>">Xóa </a></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>