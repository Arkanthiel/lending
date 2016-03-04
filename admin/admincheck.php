<?php
session_start();

$usertype=$_SESSION['usertype'];
if($usertype!= "admin"){header ("location:../login_fail");}

?>
