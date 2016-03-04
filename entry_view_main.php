<?php
include_once '/include/dbconfigblog.php';
if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM blog_posts WHERE postID=".$_GET['view_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
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
<script type="text/javascript"></script>
</head>
<body>

  <article class="module width_full">
    <header><h3><?php echo $fetched_row['postTitle']; ?></h3></header>
      <div class="module_content">
        <p><h4><?php echo $fetched_row['postDesc']; ?>></h4></p>
        <br/>
          <p><?php print $fetched_row['postCont']; ?></p>
      </div>

    <footer>
      <div class="submit_link">
        Posted on:
        <?php print $fetched_row['postDate'];?>
      </div>
    </footer>
  </article>

</body>
</html>
