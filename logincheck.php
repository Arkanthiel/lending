<?php
session_start();
//reads for the config file
include_once 'include/dbconfig.php';

// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect");
mysql_select_db("$datbase")or die("cannot select DB");

// username and password sent from form
$user=$_POST['user'];
$password=$_POST['password'];
//$password=$_POST['usertype'];

// To protect MySQL injection (more detail about MySQL injection)
$tbl_name = "users";
$user = stripslashes($user);
$password = stripslashes($password);
//$usertype = stripslashes($usertype);
$user = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);
//$usertype = mysql_real_escape_string($usertype);
$sql="SELECT user_ID,first_name, last_name, usertype, password, username FROM $tbl_name WHERE username='$user' and password='$password'";$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

 // sets userstype variable
// Register $myusername, $mypassword and redirect to file "login_success.php"

$row = mysql_fetch_assoc($result);
  $_SESSION['user_ID']=$row['user_ID'];
  $_SESSION['username']=$row['username'];
  $_SESSION['password']=$row['password'];
  $_SESSION['firstname']=$row['first_name'];
  $_SESSION['lastname']=$row['last_name'];;
  $_SESSION['usertype']=$row['usertype'];
  $usertype=$_SESSION['usertype'];
//determine usertype then redirects
if($usertype== "admin") { header("location:admin/index");}
elseif($usertype== "superuser") { header("location:superuser/index");}
elseif($usertype== "user") { header("location:user/index");}
}
else
{
header ("location:login_fail");
}
?>
