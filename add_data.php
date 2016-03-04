<?php
include_once 'include/dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$username = $_POST['username'];
$usertype = $_POST['usertype'];
$user_city = $_POST['user_city'];
 // variables for input data

//escape stuff because Robert Drop Tables
$first_name = stripslashes($first_name);
$last_name = stripslashes($last_name);
$password = stripslashes($password);
$username = stripslashes($username);
$usertype = stripslashes($usertype);
$user_city = stripslashes($user_city);
$first_name = mysql_real_escape_string($first_name);
$last_name = mysql_real_escape_string($last_name);
$password= mysql_real_escape_string($password);
$username = mysql_real_escape_string($username);
$usertype = mysql_real_escape_string($usertype);
$user_city = mysql_real_escape_string($user_city);

// sql query for inserting data into database

        $sql_query = "INSERT INTO users(first_name,last_name,password,username,usertype,user_city) VALUES('$first_name','$last_name','$password','$username','$usertype','$user_city')";
        mysql_query($sql_query);

// sql query for inserting data into database
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Entry</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Add Data</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="password" placeholder="******" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="username" placeholder="username" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="usertype" placeholder="users" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="user_city" placeholder="city" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
