<link rel="stylesheet" href="css/them.css">
<?php
$sql = "SELECT * FROM trandau WHERE MaTran = '$_GET[matran]'";
$query = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($query);
?>
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=trandau" Class="btn btn-success" style="margin-left: 500px;">Trận đấu</a>
    <div class="row d-flex justify-content-right align-items-right">
        <div class="col-5">
            <h1 class="mb-5">Sửa cầu thủ</h1>
            <form action="index.php?quanly=xulythemtrandau&matran=<?php echo $row['MaTran'] ?>" method="POST"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <?php
        $sql = "SELECT * FROM caulacbo ORDER BY MaCLB";
        $query = mysqli_query($mysqli, $sql);
    ?>
                    <label class="form-label">Đội nhà</label>
                    <select name="doinha" class="form-select" required>
                        <?php
            while ($row_clb = mysqli_fetch_array($query)) {
                $selected = ($row_clb['TenCLB'] == $row['DoiNha']) ? 'selected' : '';
        ?>
                        <option value="<?php echo $row_clb['TenCLB'] ?>" <?php echo $selected ?>>
                            <?php echo $row_clb['TenCLB'] ?></option>
                        <?php
            }
        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <?php
        mysqli_data_seek($query, 0);
    ?>
                    <label class="form-label">Đội khách</label>
                    <select name="doikhach" class="form-select" required>
                        <?php
            while ($row_clb = mysqli_fetch_array($query)) {
                $selected = ($row_clb['TenCLB'] == $row['DoiKhach']) ? 'selected' : '';
        ?>
                        <option value="<?php echo $row_clb['TenCLB'] ?>" <?php echo $selected ?>>
                            <?php echo $row_clb['TenCLB'] ?></option>
                        <?php
            }
        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày thi đấu</label>
                    <input name="ngaythidau" type="date" class="form-control" value="<?php echo $row['NgayThiDau'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kết quả</label>
                    <input name="ketqua" type="text" class="form-control" value="<?php echo $row['KetQua'] ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="suatrandau">Sửa </button>
            </form>
        </div>

        <div class="col-1"></div>

        <div class="col-6 position-relative">
            <img src="https://toquoc.mediacdn.vn/280518851207290880/2024/1/10/70943f6b4d2b9675cf3a-16732746946441398289804-1704880395002932708815.jpg"
                class="w-75 position-absolute top-50 start-50 translate-middle" />
        </div>
    </div>
</div>