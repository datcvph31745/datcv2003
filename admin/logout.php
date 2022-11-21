<?php 
include "controllers/c_user.php";
if(isset($_GET["func"])) {
    $c_user = new c_user();
    $c_user->logout();
}