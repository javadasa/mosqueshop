<?php
require_once('../model/DB.php');
session_start();
$session = session_id();
$time = time();
$time_check = $time - 300;     //We Have Set Time 5 Minutes
//$tbl_name = "online_users";


$sql = DB::query('SELECT * FROM online_users WHERE session= :@session', array(':@session' => $session));
//$result = mysqli_query($conn, $sql);
$count = DB::query('SELECT count(id) FROM online_users WHERE session= :@session', array(':@session' => $session));

//If count is 0 , then enter the values
if ($count == "0") {
    DB::queryNofetchAll('INSERT INTO online_users(session, time)VALUES(:@session, :@time)', array(':@session' => $session, ':@time' => $time));
    //  $result1 = mysqli_query($conn, $sql1);
} else {
    DB::queryNofetchAll('UPDATE online_uers SET time=:@time WHERE session = :@session', array(':@time' => $time, ':@session' => $session));
    //$result2 = mysqli_query($conn, $sql2);
}

$sql3 = DB::query('SELECT * FROM online_users');
//$result3           = mysqli_query($conn, $sql3);
$count_user_online = DB::query('SELECT count(id) FROM online_users');
//echo "<b>Users Online : </b> $count_user_online ";

// after 5 minutes, session will be deleted
DB::queryNofetchAll('DELETE FROM online_users WHERE time < :time_check', array(':time_check' => $time_check));
//$result4 = mysqli_query($conn, $sql4);

//To see the result run this script in multiple browser.
//mysqli_close($conn);
?>