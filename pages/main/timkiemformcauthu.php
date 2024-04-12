<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">
<form class="form-inline" action="index.php?quanly=timkiemformcauthu" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên clb hoặc tên cầu thủ " aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
    <h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
        <section class="table__header">
            <h1>Danh sách cầu thủ</h1>
        </section>
        <?php
            if(isset($_POST['timkiem'])){
                $tukhoa = $_POST['tukhoa'];
            } else {
                $tukhoa = '';
            }

            $sql = "SELECT * FROM cauthu 
                    INNER JOIN caulacbo ON cauthu.MaCLB = caulacbo.MaCLB 
                    WHERE cauthu.TenCauThu LIKE '%$tukhoa%' OR caulacbo.TenCLB LIKE '%$tukhoa%'";
            $query = mysqli_query($mysqli, $sql);
            ?>

        <section class="table__body">
            <a href="index.php?quanly=themcauthu" class="btn btn-outline-success" style="padding: 5px;margin-left: 1000px;">Thêm cầu thủ</a>
            <table>
                <thead>
                    <tr>
                        <th>ID <span class="icon-arrow"></span></th>
                        <th>Tên cầu thủ<span class="icon-arrow"></span></th>
                        <th>Quốc tịch<span class="icon-arrow"></span></th>
                        <th>Vị trí<span class="icon-arrow"></span></th>  
                        <th>Tên CLB<span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['TenCauThu']; ?></td>
                        <td><?php echo $row['QuocTich']; ?></td>
                        <td><?php echo $row['ViTri']; ?></td>
                        <td><?php echo $row['TenCLB']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suacauthu&idct=<?php echo $row['MaCauThu']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemcauthu&idct=<?php echo $row['MaCauThu']; ?>">Xóa </a></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>