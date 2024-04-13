<link rel="stylesheet" href="css/them.css">
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=loaitin" Class="btn btn-success" style="margin-left: 500px;">Loại tin</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thêm loại tin</h1>
                <form action="index.php?quanly=xulythemloaitin" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên loại tin</label>
                        <input name="tenloaitin" type="text" class="form-control" required >
                    </div>
                    <button type="submit" class="btn btn-primary" name="themloaitin">Thêm </button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="https://galaforex.com/wp-content/uploads/2018/07/5-loai-tin-tuc-forex-anh-huong-den-dong-usd-2.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>
