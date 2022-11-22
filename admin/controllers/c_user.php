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
    public function insertUser()
    {
        $user= new m_user();
        $read_user=$user->read_user();
        if(isset($_POST["btn-submit"])){
            $fullname=$_POST['fullname'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $result=$user->insertUser($fullname,$username,$password,$email);
        }
    }
    public function deleteUser()
    {
        $delete=new m_user();
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $result=$delete->deleteUser($id);

        }
    }
    public function editUser()
    {
        if(isset($_GET['id'])){
            $m_user=new m_user();
            $read_user=$m_user->read_user();
            $id=$_GET['id'];

            if(isset($_POST['btn'])){
                $fullname=$_POST["fullname"];
                $fullname=$_POST["username"];
                $fullname=$_POST["email"];
                $fullname=$_POST["password"];
                $result=$m_user->undate_user_by_id($fullname,$username,$email,$password);
            }
        }
    }
}