<?php
session_start();

$usertype=$_SESSION['usertype'];
if($usertype!= "superuser"){header ("location:../login_fail");}

?>
