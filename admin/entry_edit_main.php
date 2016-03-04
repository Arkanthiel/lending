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
  window.location.href='index';
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
  ?>
<script type="text/javascript">
 if(confirm('Cancelled')){
 window.location.href='index';
 }
 </script>
 <?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edit Entry</title>
<link rel="stylesheet" href="include/dashstyle/css/layout.css" type="text/css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../include/dashstyle/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../include/dashstyle/js/hideshow.js" type="text/javascript"></script>
<script src="../include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../include/dashstyle/js/jquery.equalHeight.js"></script>
<script src="../include/tinymce/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<script type="text/javascript"></script>
</head>
<body>

  <article class="module width_full">
    <header><h3>Edit Article</h3></header>
      <div class="module_content">
        <form method="post">
          <fieldset>
            <label>Post Title</label>
            <input type="text" name="postTitle" value="<?php echo $fetched_row['postTitle']; ?>" required />
          </fieldset>
          <fieldset>
            <label>Post Description</label>
            <input type="text" name="postDesc" value="<?php echo $fetched_row['postDesc']; ?>" required />
          </fieldset>
          <fieldset>
            <label>Content</label>
            <textarea type="text" rows="40" name="postCont" required /><?php print $fetched_row['postCont']; ?></textarea>
          </fieldset>

      </div>

    <footer>
      <div class="submit_link">
<!--        <select>
          <option>Draft</option>
          <option>Published</option>
        </select> -->
        <label>Date Created</label>
        <input type="text" value="<?php print $fetched_row['postDate'];?>" disabled />
        <button type="submit" name="btn-update"><strong>Update</strong></button>
      <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
      </div>
    </form>
    </footer>
  </article>

</body>
</html>
