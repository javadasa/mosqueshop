<?php

require_once('../model/DB.php');

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];



    if(DB::query('select username from users where username=:username',array(':username'=>$username))){

        if(password_verify($password,DB::query('select password from users where username=:username',array(':username'=>$username))[0]['password'])){
            echo"Logged in";
            $x=true;
            $token=bin2hex(openssl_random_pseudo_bytes(64,$x));
            $user_id=DB::query('select id from users where username=:username',array(':username'=>$username))[0]['id'];
            DB::queryNofetchAll('insert into login_token(token,user_id) values (:token,:user_id)',array(':token'=>sha1($token),':user_id'=>$user_id));

            setcookie("SNID",$token,time()+60*60*24*7,'/',NULL,NULL,TRUE);
            setcookie("SNID_",'1',time()+60*60*24*3,'/',NULL,NULL,TRUE);

        }else{
            header("Location:../view/login.php?x=1");

        }

    }else {
        //echo "User not registered";
        header("Location:../view/login.php?x=0");
    }
}

?>
