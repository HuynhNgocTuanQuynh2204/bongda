<link rel="stylesheet" href="css/them.css">
<?php
$sql = "SELECT * FROM cauthu WHERE MaCauThu = '$_GET[idct]'";
$query = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($query);
?>
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=cauthu" Class="btn btn-success" style="margin-left: 500px;">Cầu thủ</a>
    <div class="row d-flex justify-content-right align-items-right">
        <div class="col-5">
            <h1 class="mb-5">Sửa cầu thủ</h1>
            <form action="index.php?quanly=xulythemcauthu&idct=<?php echo $row['MaCauThu'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Tên cầu thủ</label>
                    <input name="tencauthu" type="text" class="form-control"  value="<?php echo $row['TenCauThu'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Quốc tịch</label>
                    <input name="quoctich" type="text" class="form-control"  value="<?php echo $row['QuocTich'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Vị trí</label>
                    <input name="vitri" type="text" class="form-control"  value="<?php echo $row['ViTri'] ?>">
                </div>
                <div class="mb-3">
                    <?php
                    $sql = "SELECT * FROM caulacbo ORDER BY MaCLB";
                    $query = mysqli_query($mysqli,$sql);
                    ?>
                    <label class="form-label">CLB</label>
                    <select name="clb" class="form-select" required>
                        <?php
                        while($row_clb = mysqli_fetch_array($query)){
                            $selected = ($row_clb['MaCLB'] == $row['MaCLB']) ? 'selected' : '';
                        ?>
                            <option value="<?php echo $row_clb['MaCLB'] ?>" <?php echo $selected ?>><?php echo $row_clb['TenCLB'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" name="suacauthu">Sửa </button>
            </form>
        </div>

        <div class="col-1"></div>

        <div class="col-6 position-relative">
            <img src="https://cafefcdn.com/203337114487263232/2022/11/8/photo-2-1667898528753393772409.jpg"
                class="w-75 position-absolute top-50 start-50 translate-middle" />
        </div>
    </div>
</div>