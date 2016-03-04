<?php require('../include/dbconfigblog.php');

// delete condition
  if(isset($_GET['delete_id']))
  {
   $sql_query="DELETE FROM blog_posts WHERE postID=".$_GET['delete_id'];
   mysql_query($sql_query);
   header("Location: $_SERVER[PHP_SELF]");
  }
  // delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test BLOG system</title>
<link rel="stylesheet" href="../include/dashstyle/css/layout.css" type="text/css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../include/dashstyle/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../include/dashstyle/js/hideshow.js" type="text/javascript"></script>
<script src="../include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../include/dashstyle/js/jquery.equalHeight.js"></script>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Edit Entry?'))
 {
  window.location.href='entry_edit.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Delete Entry?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
<section id="main" class="column">
  <?php
   $sql_query="SELECT * FROM blog_posts";
   $result_set=mysql_query($sql_query);
   while($row=mysql_fetch_row($result_set))
        {
  ?>
  <article class="module width_full">

    <div class="module_content">
      <fieldset>
      <header><h3>Entry Listing</h3></header>
      <label>Post Title</label><input type="text" value="<?php echo $row[1]; ?>" disabled />
      <label>Post Preview</label><input type="text" value="<?php echo $row[2]; ?>" disabled />
      </fieldset>
    <fieldset>
      <label>Content</label>
      <textarea type="text" rows="5" disabled /><?php echo $row[3]; ?></textarea>
    </fieldset>
      </header>
          </div>

        <footer>
          <div class="submit_link">
            <label>Time</label>
            <input type="text" value="<?php echo $row[4]; ?>" disabled />
            <a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="submit"><strong>Edit</strong></button></a>
            <a href="javascript:delete_id('<?php echo $row[0]; ?>')"><button type="submit" name="btn-update"><strong>Delete</strong></button></a>
          </div>
        </footer>
    </article>
    <?php
  }
    ?>
</section>
</center>
</body>
</html>
