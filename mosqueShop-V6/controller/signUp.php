<?php

require_once('../model/DB.php');

if (isset($_POST['signUp'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    if (!DB::query('select username from users where username=:username', array(':username' => $username))) {

        if (strlen($username) >= 3 && strlen($username) <= 32) {

            if (preg_match('/[a-zA-Z0-9_]+/', $username)) {

                if (strlen($password) >= 6 && strlen($password) <= 60) {

                    if (strlen($phoneNumber)<=11) {

                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            if (!DB::query('select email from users where email=:email', array(':email' => $email))) {


                                DB::queryNofetchAll('insert into users(username,password,email,phoneNumber) values(:username,:password,:email,:phoneNumber)', array(':username' => $username, ':password' => password_hash($password, PASSWORD_BCRYPT), ':email' => $email, ':phoneNumber' => $phoneNumber));
                                //echo "Success!";
                                header("Location:../view/login.php");
                            } else {
                                //echo "email in use";
                                header("Location:../view/signUp.php?x=1");
                            }
                        } else {
                            //echo "invalid email";
                            header("Location:../view/signUp.php?x=2");
                        }
                    }else{
                        //echo"invalid phone number";
                        header("Location:../view/signUp.php?x=6");
                    }
                } else {
                    //echo "invalid password";
                    header("Location:../view/signUp.php?x=3");
                }
            }
        } else {
            //echo "invalid username";
            header("Location:../view/signUp.php?x=4");

        }
    } else {
        //echo "invalid username!";
        header("Location:../view/signUp.php?x=5");

    }
}

?>
