<link rel="stylesheet" href="css/them.css">
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=tintuc" Class="btn btn-success" style="margin-left: 500px;">Tin tức</a>
    <div class="row d-flex justify-content-right align-items-right">
        <div class="col-5">
            <h1 class="mb-5">Thêm tin tức</h1>
            <form action="index.php?quanly=xulythemtintuc" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Tiêu đề</label>
                    <input name="tieude" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea class="form-control" id="noidung" rows="5" style="resize: none;"
                        name="noidung"></textarea>
                </div>
                <div class="mb-3">
                    <?php
                        $sql = "SELECT * FROM loaitin ORDER BY IDtin";
                        $query = mysqli_query($mysqli,$sql);
                        ?>
                    <label class="form-label">Loại tin</label>
                    <select name="loaitin" class="form-select" required>
                        <?php
                              while($row = mysqli_fetch_array($query)){
                        ?>
                        <option value="<?php echo $row['IDtin'] ?>" selected><?php echo $row['TenLoaiTin'] ?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="themtintuc">Thêm </button>
            </form>
        </div>

        <div class="col-1"></div>

        <div class="col-6 position-relative">
            <img src="https://cdnstatic.baotintuc.vn/web_images/logo-share-02.jpg"
                class="w-75 position-absolute top-50 start-50 translate-middle" />
        </div>
    </div>
</div>