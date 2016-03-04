<!doctype html>
<?php
session_start();
require('/include/dbconfigblog.php');
 ?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Lending System Dashboard</title>

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
	function view_id(id)
	  window.location.href='entry_view.php?view_id='+id;
	 }

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
	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index">Lending Sys</a></h1>
			<h2 class="section_title">Main Page</h2></div> <!--<div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a>-->
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">
			<p>
        <?php
        if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname']))
        {
          echo $_SESSION['firstname']; ?>&nbsp;<?php  echo $_SESSION['lastname'];
        }
        else {
            echo "Guest";
        }
        ?> </p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index">Website</a> </article>
		</div>
	</section><!-- end of secondary bar -->

					<?php
				include('sidebarcheck.php');
				?>
			<!-- end of sidebar -->

			<section id="main" class="column">
				<?php
				 $sql_query="SELECT * FROM blog_posts WHERE publishedstatus='Published' ORDER BY postDate DESC";
				 $result_set=mysql_query($sql_query);
				 while($row=mysql_fetch_row($result_set))
							{
				?>
			  <article class="module width_full">

					<header><h3><a href="entry_view.php?view_id=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h3></header>
		    	<div class="module_content">
						<h3>Posted By: <?php echo $row[1]; ?></h3>
					<p>Posted on:<?php echo $row[5]; ?></p>
          <hr/>
  			      <?php echo $row[4]; ?>
          	</div>
			        <footer>
			          <div class="submit_link">
			            <a href="javascript:view_id('<?php echo $row[0]; ?>')"><p>Read More</p></a>
								</div>
							</footer>
			    </article>
												<div class="spacer"></div>
					<?php
				}
					?>
			</section>

</body>

</html>
