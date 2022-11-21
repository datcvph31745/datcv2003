<?php 
class c_product {
    public function product_detail() {
        if(isset($_GET["id"])) {
            require_once "models/m_product.php";
            $id = $_GET["id"];
            $m_prd = new m_product();
            $prd_detail = $m_prd->read_product_detail();
        }

        // tạm thời chưa cần lấy dữ liệu ra, cứ view ra đc layout đã rồi tính
        $view = "views/product/v_product_detail.php";
        // sau khi tạo đc biến view thì phải inclulde layout.php 
        include "templates/front-end/layout.php";
    }
}