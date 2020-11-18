<?php

include('../model/DB.php');

if (isset($_POST['signUp'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    if ($password == $repassword) {
        if (!DB::query('select username from users where username=:username', array(':username' => $username))) {

            if (strlen($username) >= 3 && strlen($username) <= 32) {

                if (preg_match('/[a-zA-Z0-9_]+/', $username)) {

                    if (strlen($password) >= 6 && strlen($password) <= 60) {

                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            if (!DB::query('select email from users where email=:email', array(':email' => $email))) {

                                DB::queryNofetchAll('insert into users(username,password,email) values(:username,:password,:email)', array(':username' => $username, ':password' => password_hash($password, PASSWORD_BCRYPT), ':email' => $email));
                                echo "Success!";
                            } else {
                                echo "email in use";
                            }
                        } else {
                            echo "invalid email";

                        }
                    } else {
                        echo "invalid password";
                    }
                }
            } else {
                echo "invalid username";

            }
        } else {
            echo "invalid username!";

        }
    } else {
        echo "پسورد با تکرارش یکسان نیست";
    }
}
?>
