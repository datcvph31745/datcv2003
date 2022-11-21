<?php 
session_start();
include "models/m_user.php";
class c_user {
    public function logout() {
        if(isset($_GET["func"])) {
            unset($_SESSION["user"]);
            header("location:../index.php");
        }
    }
    public function deleteUser() {
        $m_user = new m_user;
        $id = $_GET["id"];
        $result = $m_user->deleteUser($id);
        if($result) {
            echo "<script>alert('......')</script>";
            header("location :");
        }
    }
    public function showUser() {
       $m_user = new m_user;
       
    }
}