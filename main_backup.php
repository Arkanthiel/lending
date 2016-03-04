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

    <article class="module width_full">
    <header><h3>Entry Listing</h3></header>
      <div class="tab_container">
        <div id="tab1" class="tab_content">
    <table class="tablesorter" align="center" cellspacing="4">
    <th>Title</th>
    <th>Preview</th>
    <th>Content</th>
    <th>Date</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
     $sql_query="SELECT * FROM blog_posts";
     $result_set=mysql_query($sql_query);
     while($row=mysql_fetch_row($result_set))
          {
    ?>
                <tr>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="../include/dashstyle/images/b_edit.png" align="EDIT" /></a></td>
                <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="../include/dashstyle/images/b_drop.png" align="DELETE" /></a></td>
                </tr>
                <?php
          }
                ?>
    </table>
  </div>
</div>
  </article><!-- end of styles article -->
</section>

</center>
</body>
</html>
