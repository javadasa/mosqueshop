<?php
require_once('../model/DB.php');
session_start();
$session = session_id();
$time = time();
$time_check = $time - 300;     //We Have Set Time 5 Minutes
//$tbl_name = "online_users";


$sql = connectDB::query('SELECT * FROM online_users WHERE session= :@session', array(':@session' => $session));
//$result = mysqli_query($conn, $sql);
$count = connectDB::query('SELECT count(id) FROM online_users WHERE session= :@session', array(':@session' => $session));

//If count is 0 , then enter the values
if ($count == "0") {
    connectDB::queryNofetchAll('INSERT INTO online_users(session, time)VALUES(:@session, :@time)', array(':@session' => $session, ':@time' => $time));
    //  $result1 = mysqli_query($conn, $sql1);
} else {
    connectDB::queryNofetchAll('UPDATE online_uers SET time=:@time WHERE session = :@session', array(':@time' => $time, ':@session' => $session));
    //$result2 = mysqli_query($conn, $sql2);
}

$sql3 = connectDB::query('SELECT * FROM online_users');
//$result3           = mysqli_query($conn, $sql3);
$count_user_online = connectDB::query('SELECT count(id) FROM online_users');
//echo "<b>Users Online : </b> $count_user_online ";

// after 5 minutes, session will be deleted
connectDB::queryNofetchAll('DELETE FROM online_users WHERE time < :time_check', array(':time_check' => $time_check));
//$result4 = mysqli_query($conn, $sql4);

//To see the result run this script in multiple browser.
//mysqli_close($conn);
?>