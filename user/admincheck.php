<?php
session_start();

$usertype=$_SESSION['usertype'];
if($usertype!= "user"){header ("location:../login_fail");}

?>
