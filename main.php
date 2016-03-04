<!doctype html>
<?php
session_start();
require('/include/dbconfigblog.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="wrapper-bgtop">
		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="#">Lending System</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
						<li><a href="#" accesskey="3" title="">Services</a></li>
						<li><a href="#" accesskey="4" title="">About</a></li>
						<li><a href="#" accesskey="5" title="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="banner" class="container"><img src="images/image1.jpg" width="1000" height="300" alt="" /></div>
		<div id="page" class="container">
			<div id="content">
				<div>
					<?php
					 $sql_query="SELECT * FROM blog_posts WHERE publishedstatus='Published' ORDER BY postDate DESC";
					 $result_set=mysql_query($sql_query);
					 $row=mysql_fetch_row($result_set)
					?>
					<h2><a href="entry_view2.php?view_id=<?php echo $row[0]; ?>"> <?php echo $row[2]; ?></a></h2>
					<?php echo $row[4]; ?>
					<p><a href="#" class="button1">List All Entries</a></p>
				</div>
			</div>
			<div id="sidebar">
				<div class="sidebar-box">
					<form name="form1" method="post" action="logincheck.php">
					<h2>Login</h2>
					<p>Username:<br/> <input type="text" placeholder="" cols="" name="user" id="user"></p>
					<p>Password:<br/> <input type="password" placeholder="******" name="password" id="password"></p>
					<p><input type="submit" name="Submit" value="Login">
					<input type="reset" name="Reset" name="btn-cancel" value="Reset"></p>
					</form>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div id="bg1">
	<div id="bg2">
		<div id="three-cols" class="container">
			<div id="column1">
				<h2>Integer gravida nibh</h2>
				<ul class="list-style1">
					<li><a href="#">Donec ut odio a molestie eu id magna.</a></li>
					<li><a href="#">Nunc ultrices diam, sed metus nec.</a></li>
					<li><a href="#">Ut ut ipsum libero,  semper mauris.</a></li>
					<li><a href="#">Pellentesque  gravida vulputate.</a></li>
					<li><a href="#">Aliquam accumsan , risus eleifend.</a></li>
					<li><a href="#">Integer sed ligula  at adipiscing dolor.</a></li>
				</ul>
			</div>
			<div id="column2">
				<h2>Praesent scelerisque</h2>
				<ul class="list-style1">
					<li><a href="#">Donec ut odio a molestie eu id magna.</a></li>
					<li><a href="#">Nunc ultrices diam, sed metus nec.</a></li>
					<li><a href="#">Ut ut ipsum libero,  semper mauris.</a></li>
					<li><a href="#">Pellentesque  gravida vulputate.</a></li>
					<li><a href="#">Aliquam accumsan , risus eleifend.</a></li>
					<li><a href="#">Integer sed ligula  at adipiscing dolor.</a></li>
				</ul>
			</div>
			<div id="column3">
				<h2>Etiam malesuada rutrum</h2>
				<ul class="list-style1">
					<li><a href="#">Donec ut odio a molestie eu id magna.</a></li>
					<li><a href="#">Nunc ultrices diam, sed metus nec.</a></li>
					<li><a href="#">Ut ut ipsum libero,  semper mauris.</a></li>
					<li><a href="#">Pellentesque  gravida vulputate.</a></li>
					<li><a href="#">Aliquam accumsan , risus eleifend.</a></li>
					<li><a href="#">Integer sed ligula  at adipiscing dolor.</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
-->
<div id="footer">
	<p>Copyright (c) 2012 Untitled Templates. All rights reserved. Design by <a href="http://www.thewebhub.com/">Web Hub</a>. Photos by <a href="http://www.piktyurs.com/">Piktyurs.</a></p>
</div>
</body>
</html>
