<?php




include('../model/DB.php');
include('../controller/isLoggedIn.php');

if (Login::isLoggedIn()) {
    $userid = Login::isLoggedIn();
} else {
    header("Location:../view/login.php");
}