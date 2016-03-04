<!doctype html>
<?php
include_once 'admincheck.php';
require('../include/dbconfig.php');

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

 ?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
		<link rel="stylesheet" href="include/dashstyle/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="../include/dashstyle/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="../include/dashstyle/js/hideshow.js" type="text/javascript"></script>
	<script src="../include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../include/dashstyle/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
  function edt_id(id)
  {
   if(confirm('Sure to edit ?'))
   {
    window.location.href='edit_data.php?edit_id='+id;
   }
  }
  function delete_id(id)
  {
   if(confirm('Sure to Delete ?'))
   {
    window.location.href='index.php?delete_id='+id;
   }
  }
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>


<body>
  <article class="module width_3_quarter">
  <header><h3 class="tabs_involved">Users Manager</h3></header>

  <div class="tab_container">
    <div id="tab1" class="tab_content">
      <form>
        <form  method="post" action="user_search.php?go"  id="searchform">
	      <input  type="text" name="searchterm">
        <input  type="submit" name="submit" value="Search">
      </form>
</div>


  		<div class="tab_container">
  			<div id="tab1" class="tab_content">
  			<table class="tablesorter" cellspacing="0">
  			<thead>
  				<tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>User type</th>
           <th>Username</th>
           <th colspan="2">Operations</th>
           </tr>
           <?php
        $sql_query="SELECT * FROM users";
        $result_set=mysql_query($sql_query);
        while($row=mysql_fetch_row($result_set))
        {
         ?>
               <tr>
               <td><?php echo $row[1]; ?></td>
               <td><?php echo $row[3]; ?></td>
               <td><?php echo $row[8]; ?></td>
               <td><?php echo $row[10]; ?></td>
               <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
               <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete </a></td>
               </tr>
               <?php
        }
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>
