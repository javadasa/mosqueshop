<?php

class Login
{
    /**
     * @return bool
     */
    public static function isLoggedIn()
    {

        if (isset($_COOKIE['SNID'])) {

            if (connectDB::query('select user_id from login_tokens where token=:token', array(':token' => sha1($_COOKIE['SNID']))))
            {

                $userid = connectDB::query('select user_id from login_tokens where token=:token', array(':token' => sha1($_COOKIE['SNID'])))[0]['user_id'];

                if (isset($_COOKIE['SNID_']))
                {

                    return $userid;
                } else {
                    $x = true;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $x));
                    connectDB::queryNofetchAll('insert into login_tokens(token,user_id) values (:token,:user_id)', array(':token' => sha1($token), ':user_id' => $userid));
                    connectDB::queryNofetchAll('delete from login_tokens where token=:token', array(':token' => sha1($_COOKIE['SNID'])));

                    setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                    setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);


                    return $userid;
                }
            }

        }
        return false;
    }
}
?>