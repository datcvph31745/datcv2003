<?php
include "controllers/c_home.php";
// if(isset($_SESSION["user"])) {
//     $c_home = new c_home();
//     $c_home ->index();
// }else {
//     // echo "alert('ban chua dang nhap')";
//     header("location:../login.php");
// }
$c_home = new c_home;
$c_home->index();