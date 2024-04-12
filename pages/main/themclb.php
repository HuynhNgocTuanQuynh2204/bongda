<link rel="stylesheet" href="css/them.css">
<div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=clb" Class="btn btn-success" style="margin-left: 500px;">CLB</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thêm CLB</h1>
                <form action="index.php?quanly=xulythemclb" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên CLB</label>
                        <input name="tenclb" type="text" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tỉnh</label>
                        <input name="tinh" type="text" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="themclb">Thêm </button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="https://cafefcdn.com/203337114487263232/2022/11/8/photo-2-1667898528753393772409.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>
