<div class="wrapper">
    <style>
    .wrapper {
        display: flex;
    }
    </style>
    <?php
        include("sidebar/sidebar.php")
        ?>

    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhsachtieuchi'){
                include("main/danhsachtieuchi.php");
            }else if($tam =='clb'){
                include("main/caulacbo.php");
            }else if($tam =='themclb'){
                include("main/themclb.php");
            }else if($tam =='tintuc'){
                include("main/tintuc.php");
            }else if($tam =='themtintuc'){
                include("main/themtintuc.php");
            }else if($tam =='suaclb'){
                include("main/suaclb.php");
            }else if($tam =='timkiemformclb'){
                include("main/timkiemformclb.php");
            }else if($tam =='timkiemformcauthu'){
                include("main/timkiemformcauthu.php");
            }else if($tam =='timkiemformtintuc'){
                include("main/timkiemformtintuc.php");
            }else if($tam =='timkiemformnguoidung'){
                include("main/timkiemformnguoidung.php");
            }else if($tam =='dudoan'){
                include("main/dudoan.php");
            }else if($tam =='cauthu'){
                include("main/cauthu.php");
            }else if($tam =='trandau'){
                include("main/trandau.php");
            } else if($tam =='themtrandau'){
                include("main/themtrandau.php");
            }else if($tam =='xemthemtintuc'){
                include("main/xemthemtintuc.php");
            }else if($tam =='binhluan'){
                include("main/binhluan.php");
            }else if($tam =='themcauthu'){
                include("main/themcauthu.php");
            }else if($tam =='suacauthu'){
                include("main/suacauthu.php");
            }else if($tam =='nguoidung'){
                include("main/nguoidung.php");
            }else if($tam =='suatintuc'){
                include("main/suatintuc.php");
            }
            else if($tam =='suatrandau'){
                include("main/suatrandau.php");
            }
            else if($tam =='xulythemclb'){
                include("xuly/xulythemclb.php");
            }
            else if($tam =='xulythemcauthu'){
                include("xuly/xulythemcauthu.php");
            }
            else if($tam =='xulythemtintuc'){
                include("xuly/xulythemtintuc.php");
            }
            else if($tam =='xulythemtrandau'){
                include("xuly/xulythemtrandau.php");
            }
            else {
                include("main/index.php");
            }
          ?>
</div>