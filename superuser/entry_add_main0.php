<?php
include_once '../include/dbconfigblog.php';
  if(isset($_POST['btn-save']))
  {
     // variables for input data
    //$postID = $_POST['postID'];
    $postTitle = $_POST['postTitle'];
    $postDesc = $_POST['postDesc'];
    $postCont = $_POST['postCont'];
    //$postDate = date_create()->format('Y-m-d H:i:s');


    //escape stuff because Robert Drop Tables
    $postTitle = stripslashes($postTitle);
    $postCont = stripslashes($postCont);
    $postID = mysql_real_escape_string($postTitle);
    $postCont= mysql_real_escape_string($postCont);

    // sql query for inserting data into database
            $sql_query = "INSERT INTO blog_posts(postTitle,postDesc,postCont) VALUES('$postTitle','$postDesc','$postCont')";
            mysql_query($sql_query);
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
            <label>Post Title</label>
            <textarea type="text" name="postTitle" cols='12' placeholder="Title" required /></textarea>
          </fieldset>
          <fieldset>
            <label>Post Description</label>
            <textarea type="text" name="postDesc" cols='12' placeholder="Enter a Short Description here" required /></textarea>
          </fieldset>
          <fieldset>
            <label>Content</label>
            <textarea type="text" name="postCont" cols='60' rows='10' placeholder="Enter the Article Proper here, Content can include HTML codes" required /></textarea>
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
