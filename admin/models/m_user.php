<?php 
include "models/databaseAd.php";
class m_user extends database {
    public function read_user() {
        $sql = "select * from users ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function deleteUser($id) {
        $sql = "delete from users where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    
}