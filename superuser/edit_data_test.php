<?php
include_once '../include/dbconfigblog.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM blog_posts WHERE postID=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $postTitle = $_POST['postTitle'];
 $postDesc = $_POST['postDesc'];
 $postCont = $_POST['postCont'];
 // variables for input data

 //escape stuff because Robert Drop Tables
$postTitle = stripslashes($postTitle);
$postDesc = stripslashes($postDesc);
$postCont = stripslashes($postCont);
$postTitle = mysql_real_escape_string($postTitle);
$postDesc = mysql_real_escape_string($postDesc);
$postCont = mysql_real_escape_string($postCont);

 // sql query for update data into database
 $sql_query = "UPDATE blog_posts SET postTitle='$postTitle',postDesc='$postDesc',postCont='$postCont' WHERE postID=".$_GET['edit_id'];
 // sql query for update data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Updated Successfully');
  window.location.href='edit_data_test';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
  die(mysql_error());
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="postTitle" placeholder="First Name" value="<?php echo $fetched_row['postTitle']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="postDesc" placeholder="Last Name" value="<?php echo $fetched_row['postDesc']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="postCont" placeholder="City" value="<?php echo $fetched_row['postCont']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
