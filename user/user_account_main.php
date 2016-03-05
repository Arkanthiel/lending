<!doctype html>
<?php
include_once 'admincheck.php';
require('../include/dbconfig.php');
$user_ID=$_SESSION['user_ID'];
$sql_query="SELECT * FROM users WHERE user_id=".$_SESSION['user_ID'];
$result_set=mysql_query($sql_query);
$fetched_row=mysql_fetch_array($result_set);
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
  <script src="../include/dashstyle/js/jquery.edatagrid.js" type="text/javascript"></script>
	<script src="../include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="..//include/dashstyle/js/jquery.equalHeight.js"></script>
</head>


<body>
	<?php
	date_default_timezone_set('Australia/Perth');
	$alpha=date("Y/m/d");
	$omega=$fetched_row['datedue'];
	$sql_query="SELECT * FROM users WHERE user_id=".$_SESSION['user_ID'];
	$result_set=mysql_query($sql_query);
	$row=mysql_fetch_row($result_set);


				// RETURN FALSE IF THE DATES ARE BOGUS
			if (!$a = strtotime($alpha)) return FALSE;
			if (!$z = strtotime($omega)) return FALSE;

			// MAN PAGE http://php.net/manual/en/function.gregoriantojd.php
			$a_jd = GregorianToJD( date('m', $a), date('d', $a), date('Y', $a) );
			$z_jd = GregorianToJD( date('m', $z), date('d', $z), date('Y', $z) );

	$countdowndate = $z_jd - $a_jd;



	if ($countdowndate <= 15 && $countdowndate > 0){
	?>
	<h4 class="alert_error">There are <?php echo $countdowndate; ?> days before your Due Date!</h4>
	<?php
	}
	if ($countdowndate == 0 && $countdowndate >= 0){
	?>
	<h4 class="alert_error">Reminder, today is your Due Date!</h4>
	<?php
	}


?>
  <article class="module width_full_real">
  <header><h3 class="tabs_involved">User Account</h3>
  </header>
  		<div class="module_content">
          <table cellpadding="4" >
            <tr>
              <th><h1>Hello! <?php echo $fetched_row['first_name']; ?> <?php echo $fetched_row['last_name']; ?> </h1></th>
            </tr>
            <tr>
              <th><h3>Your Current Balance is: PHP <font color="red"><?php echo $fetched_row['locurrentamt']; ?></h3></font></th>
              <th><h3>It is due on <?php echo $fetched_row['datedue']; ?></h3></th>
              <th><h3>It is a <?php echo $fetched_row['loantype']; ?> loan</h3></th>
              <th><h3>Loan Cycle <?php echo $fetched_row['loancycle']; ?></h3></th>
            </tr>
            <tr>
              <th><h3>The Last Paid Amount was PHP <font color="red"><?php echo $fetched_row['lolastpaidamt']; ?></h3></font></th>
              <th><h3>Which was made on on <?php echo $fetched_row['lolastpaiddate']; ?></h3></th>

            </tr>
          </table>
  </div>
  <footer>
</footer>
  </article>
  <br/>
  <br/>
  <br/>
  </body>

</html>
