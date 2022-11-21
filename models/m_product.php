<?php 
include "database.php";
 
class m_product extends database {
    // extends database là kế thừa từ database (là những hàm viết ở database.php)
    public function read_product_detail() {
        $id = $_GET["id"];
        $sql = "select * from products where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}