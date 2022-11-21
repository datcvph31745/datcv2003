<?php 
include "databaseAd.php";
class m_cate extends database {
    public function read_cate() {
        $sql = "select * from categories ";
        $this->setQuery($sql);
        return $this->execute();
    }
}