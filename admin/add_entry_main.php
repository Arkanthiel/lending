<?php
include_once '../include/dbconfigblog.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
//$postID = $_POST['postID'];
$postTitle = $_POST['postTitle'];
$postDesc = $_POST['postDesc'];
$postCont = $_POST['postCont'];
//$postDate = $_POST['postDate'];
 // variables for input data

//escape stuff because Robert Drop Tables
//$postID = stripslashes($postID);
//$postDesc = stripslashes($postDesc);
$postCont = stripslashes($postCont);
//$postDate = stripslashes($postDate);
$postID = mysql_real_escape_string($postTitle);
//$postDesc = mysql_real_escape_string($postDesc);
$postCont= mysql_real_escape_string($postCont);
//$postDate = mysql_real_escape_string($postDate);

// sql query for inserting data into database

        $sql_query = "INSERT INTO blog_posts(postTitle,postDesc,postCont) VALUES('$postTitle','$postDesc','$postCont')";
        mysql_query($sql_query);

// sql query for inserting data into database
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="postCont-Type" postCont="text/html; charset=utf-8" />
<link rel="stylesheet" href="/..include/dashstyle.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="postCont">
    <label>Add a new Post</label>
    </div>
</div>
<div id="body">
 <div id="postCont">
    <form method="post">
    <table align="center">
    <tr>
    <td><textarea type="text" name="postTitle" cols='60' placeholder="Title" required /></textarea></td>
    </tr>
    <tr>
    <td><textarea type="text" name="postDesc" cols='60' placeholder="Enter a short Description" required /></textarea></td>
    </tr>
    <tr>
    <td><textarea type="text" name="postCont" cols='60' rows='10' placeholder="Content" required /></textarea></td>
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
