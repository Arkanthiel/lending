<?php
include_once 'admincheck.php';
require('../include/dbconfig.php');
//require('user_pay_main.php');


function sendsms(){
$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
$result_set=mysql_query($sql_query);
$fetched_row=mysql_fetch_array($result_set);

$un = "xatm0013";
$pwd = "E1kopre";
$cell = $fetched_row['cellphone'];
$name = $fetched_row['first_name'];
$message = "Thank%20you%20for%20processing%20your%20payment%20" . $name . "!";

$url = "www.isms.com.my/isms_send.php?un=&pwd=" . $pwd . "&dstno=" . $cell . "&msg=" . $message . "&type=1";

$link = "<script>window.open('$url')</script>";

echo $link;

//echo $url;
}
//www.isms.com.my/isms_send.php?un=xatm0013&pwd=E1kopre&dstno=639255559683&msg=This%20is%20Judes.%20Test%20SMS%20is%20working.&type=1

?>
