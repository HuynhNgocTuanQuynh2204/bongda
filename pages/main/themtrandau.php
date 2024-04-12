<link rel="stylesheet" href="css/them.css">
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=trandau" Class="btn btn-success" style="margin-left: 500px;">Trận đấu</a>
    <div class="row d-flex justify-content-right align-items-right">
        <div class="col-5">
            <h1 class="mb-5">Thêm cầu thủ</h1>
            <form action="index.php?quanly=xulythemtrandau" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                    <?php
                        $sql = "SELECT * FROM caulacbo ORDER BY MaCLB";
                        $query = mysqli_query($mysqli,$sql);
                        ?>
                    <label class="form-label">Đội nhà</label>
                    <select name="doinha" class="form-select" required>
                        <?php
                              while($row = mysqli_fetch_array($query)){
                        ?>
                        <option value="<?php echo $row['TenCLB'] ?>" selected ><?php echo $row['TenCLB'] ?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <?php
                        $sql = "SELECT * FROM caulacbo ORDER BY MaCLB";
                        $query = mysqli_query($mysqli,$sql);
                        ?>
                    <label class="form-label">Đội khách</label>
                    <select name="doikhach" class="form-select" required>
                        <?php
                              while($row = mysqli_fetch_array($query)){
                        ?>
                        <option value="<?php echo $row['TenCLB'] ?>" selected ><?php echo $row['TenCLB'] ?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày thi đấu</label>
                    <input name="ngaythidau" type="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kết quả</label>
                    <input name="ketqua" type="text" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary" name="themtrandau">Thêm </button>
            </form>
        </div>

        <div class="col-1"></div>

        <div class="col-6 position-relative">
            <img src="https://toquoc.mediacdn.vn/280518851207290880/2024/1/10/70943f6b4d2b9675cf3a-16732746946441398289804-1704880395002932708815.jpg"
                class="w-75 position-absolute top-50 start-50 translate-middle" />
        </div>
    </div>
</div>