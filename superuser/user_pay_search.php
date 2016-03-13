<!doctype html>
<?php
include_once 'admincheck.php';
require('../include/dbconfig.php');

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
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
    window.location.href='user_edit.php?edit_id='+id;
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
  <header><h3 class="tabs_involved">Users Search by Name</h3>
  </header>

  <form>
    <form  method="post" action="user_pay_main.php?go"  id="searchform">
    <input  type="text" name="searchterm">
    <input  type="submit" name="submit" value="Search">
  </form>

  		<div class="tab_container">
  			<div id="tab1" class="tab_content">
  			<table class="tablesorter" cellspacing="0">
  			<thead>
  				<tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Username</th>
           <th>Operations</th>
           </tr>
           <?php
           if(isset($_GET['searchterm']))
           {
             $searchterm = $_GET['searchterm'];
              $sql_query="SELECT * FROM users WHERE first_name LIKE '%" . $searchterm . "%' OR last_name LIKE '%" . $searchterm  ."%'";
              $result_set=mysql_query($sql_query);
              while($row=mysql_fetch_row($result_set))
              {
                if($result_set === FALSE) {
                die(mysql_error());
                }
        ?>
              <tr>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[10]; ?></td>
              <td><a href="user_pay_actual?edit_id=<?php echo $row[0]; ?>">Process Payment</a></td>
              </tr>
              <?php
            }
          }
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>
