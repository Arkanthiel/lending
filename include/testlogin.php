<?php
session_start();
include '../include/dbconfig.php';
// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect");
mysql_select_db("$datbase")or die("cannot select DB");

// read data from Session
//$suser=$_SESSION['user'];
//$spassword=$_SESSION['password'];
//$susertype=$_SESSION['usertype'];
//$user=$_SESSION['user'];
//$password=$_SESSION['password'];
//$usertype=$_SESSION['usertype'];

//strip for injects
//$user = stripslashes($user);
//$password = stripslashes($password);
//$usertype = stripslashes($usertype);
//$user = mysql_real_escape_string($user);
//$password = mysql_real_escape_string($password);
//$usertype = mysql_real_escape_string($usertype);
$sql="SELECT usertype FROM $tbl_name WHERE user='$user' and password='$password'";
$result=mysql_query($sql);
$usertype=mysql_fetch_array($result);

if( $_SESSION['usertype'] != $usertype)
  { header ("location:../errors/woops");  }

else
  { header ("location:../https://www.google.com");  }
?>
