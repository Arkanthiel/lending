<!doctype html>
<html lang="en">
<?php
include_once 'admincheck.php';
include_once '../include/dbconfigblog.php';


if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}


?>
<head>

	<meta charset="utf-8"/>
	<title>Administrator Dashboard</title>

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
	$(document).ready(function()
    	{
      	  $(".tablesorter").tablesorter();
   	 }
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>
  <article class="module width_3_quarter">
  <header><h3 class="tabs_involved">Users Search by Author or Title</h3>
  </header>

  <form>
    <form  method="post" action="user_search.php?go"  id="searchform">
    <input  type="text" name="searchterm">
    <input  type="submit" name="submit" value="Search">
  </form>

  		<div class="tab_container">
  			<div id="tab1" class="tab_content">
  			<table class="tablesorter" cellspacing="0">
  			<thead>
  				<tr>
           <th>Author</th>
           <th>Last Name</th>
           <th>Operation</th>
           </tr>
           <?php
           if(isset($_GET['searchterm']))
           {
             $searchterm = $_GET['searchterm'];
              $sql_query="SELECT * FROM $tbl_name WHERE postAuthor LIKE '%" . $searchterm . "%' OR postTitle LIKE '%" . $searchterm  ."%'";
              $result_set=mysql_query($sql_query);
              while($row=mysql_fetch_row($result_set))
              {
                if($result_set === FALSE) {
                die(mysql_error());
                }
        ?>
              <tr>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
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
