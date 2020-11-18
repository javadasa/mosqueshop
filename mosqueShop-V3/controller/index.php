<?php

include('../model/DB.php');
include('../controller/isLoggedIn.php');
if(isset($_POST['home'])) {
    if (Login::isLoggedIn()) {
        $userid = Login::isLoggedIn();


        $username = DB::query('select username from users where id=:userid', array(':userid' => $userid));
        header("Location:../view/index.php?user=$username");


    } else {
        header("Location:../view/login.php");
    }

}
