<?php
include "model/pdo.php";
    include "view/header.php";
    // include "view/home.php";
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        //echo $act;
        switch ($act) {
            case 'sanpham':
                include "view/home.php";
                break;
            case 'sanphamdm':
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                include "view/sanphamct.php";
                break;
            case 'giohang':
                include "view/giohang.php";
                break;
            case 'dangky':
                include "view/dangky.php";
                break;
        }
    }
    include "view/footer.php";
?>  
</div>
<script src="main.js"></script>
</body>
</html>