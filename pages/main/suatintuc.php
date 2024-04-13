<link rel="stylesheet" href="css/them.css">
<?php
$sql = "SELECT * FROM tintuc WHERE MaTin = '$_GET[matin]'";
$query = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($query);
?>
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=tintuc" Class="btn btn-success" style="margin-left: 500px;">Tin tức</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Sửa tin tức</h1>
                <form action="index.php?quanly=xulythemtintuc&matin=<?php echo $row['MaTin'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tiêu đề</label>
                        <input name="tieude" type="text" class="form-control"  value="<?php echo $row['TieuDe'] ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nội dung</label>
                        <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"><?php echo $row['NoiDung'] ?></textarea>
                    </div>
                    <div class="mb-3">
                    <?php
                        $sql = "SELECT * FROM loaitin ORDER BY IDtin";
                        $query = mysqli_query($mysqli,$sql);
                        ?>
                    <label class="form-label">Loại tin</label>
                    <select name="loaitin" class="form-select" required>
                        <?php
                              while($row_tintuc = mysqli_fetch_array($query)){
                                $selected = ($row_tintuc['IDtin'] == $row['IDtin']) ? 'selected' : '';
                        ?>
                        <option value="<?php echo $row_tintuc['IDtin'] ?>" selected ><?php echo $row_tintuc['TenLoaiTin'] ?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>
                    <button type="submit" class="btn btn-primary" name="suatintuc">Sửa </button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="https://cdnstatic.baotintuc.vn/web_images/logo-share-02.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>
