<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8"/>
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
<aside id="sidebar" class="column">
<h3>Blog Tasks</h3>
<li class="icn_new_article"><a href="entry_add">New Entry</a></li>
<li class="icn_edit_article"><a href="index">View Enties</a></li>
<li class="icn_categories"><a href="#">Search Entry</a></li>
</ul>
<h3>User Tasks</h3>
<li class="icn_add_user"><a href="user_add">Add New User</a></li>
<li class="icn_view_users"><a href="user_view">View Users</a></li>
<li class="icn_profile"><a href="user_profile">Your Profile</a></li>
</ul>
<h3>Admin</h3>
<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
</ul>

<footer>
<hr />
<p><strong>Copyright &copy; 2011 Ark</strong></p>
<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
</footer>

</aside>
</body>
</html>
