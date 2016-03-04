<?php
include_once 'admincheck.php';
include_once '../include/dbconfig.php';
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
  <link rel="stylesheet" href="include/dashstyle/css/layout.css" type="text/css" media="screen" />
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="include/dashstyle/js/jquery-1.5.2.min.js" type="text/javascript"></script>
  <script src="include/dashstyle/js/hideshow.js" type="text/javascript"></script>
  <script src="include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/include/dashstyle/js/jquery.equalHeight.js"></script>
  <script type="text/javascript">
  </script>
</head>
<body>
  <article class="module width_full">
    <header><h3>Post New Article</h3></header>
      <div class="module_content">
        <form method="post">
          <fieldset>
            <label>First Name</label>
            <input type="text" name="first_name" cols='12' placeholder="First Name" required />
            </fieldset>
          <fieldset>
            <label>Last Name</label>
            <input type="text" name="last_name" cols='12' placeholder="Last Name" required />
            </fieldset>
          <fieldset>
            <label>Username</label>
            <input type="text" name="username" cols='12' placeholder="Username" required />
            </fieldset>
          <fieldset>
            <label>Password</label>
            <input type="password" name="password" cols='12' placeholder="******" required />
            </fieldset>
          <fieldset>
            <label>City</label>
            <input type="text" name="user_city" cols='12' placeholder="City" required />
            </fieldset>
          <fieldset>
            <label>User Priviledges</label>
            <select name="usertype">
                      <option value="admin">Admin</option>
                      <option value="superuser">Superuser</option>
                      <option value="user">User</option>
                    </select>
          </fieldset>

      </div>
    <footer>
      <div class="submit_link">
<!--        <select>
          <option>Draft</option>
          <option>Published</option>
        </select>
      -->
        <input type="submit" value="Publish" class="alt_btn" name="btn-save">
        <input type="submit" value="Reset">
      </form>
      </div>
    </footer>
  </article>

</center>
</body>
