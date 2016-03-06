<!doctype html>
<?php
include_once 'admincheck.php';

?>
<html lang="en">

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
</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index">Lending Sys</a></h1>
			<h2 class="section_title">Creative Credit &amp; Loans Assistance Services, Inc.</h2></div> <!--<div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a>-->
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $_SESSION['firstname']; ?>&nbsp;<?php  echo $_SESSION['lastname'];?> </p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
<!-- end of sidebar -->
<?php include('sidebar.php'); ?>
<!-- end of sidebar -->

	<section id="main" class="column">
<!-- start of main section -->
<?php include('main.php'); ?>
	</section>


</body>

</html>
