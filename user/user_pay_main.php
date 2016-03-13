<!doctype html>
<?php
//notes: updating works, but no inital edit_id, also refresh isnt auto update
include_once 'admincheck.php';
require('../include/dbconfig.php');
$user_ID=$_SESSION['user_ID'];
if(isset($_SESSION['user_ID']))
{
$sql_query="SELECT * FROM users WHERE user_id=".$_SESSION['user_ID'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
 }


if(isset($_POST['btn-update']))
{
  $payment = filter_var( $_POST['payment'], FILTER_VALIDATE_INT);

       $sql_query="SELECT * FROM users WHERE user_id=".$_SESSION['user_ID'];
       $result_set=mysql_query($sql_query);
       $fetched_row=mysql_fetch_array($result_set);


       $currentamt2 =
             $currentpool2 =  // Yung matitira sa wallet

        $currentpool = $fetched_row['locurrentpool'];
        $currentamt = $fetched_row['locurrentamt'];
        $interestrate = $fetched_row['interestrate'];
        $lolastpaidamt = filter_var( $_POST['payment'], FILTER_VALIDATE_INT);
        $lolastpaiddate = date("Y/m/d");
        $removefrompool = $currentpool - $payment;

        if ($payment <= $currentpool && $payment > 0)
            {
                $d = $currentamt - $payment;
                $c = $currentpool - $payment;
                $sql_query = "UPDATE users SET locurrentamt = '$d', locurrentpool = '$c', lolastpaidamt = '$payment', lolastpaiddate = '$lolastpaiddate' WHERE user_id=".$_SESSION['user_ID'];
                mysql_query($sql_query); // execute
                ?>
                <script type="text/javascript">
                alert('Payment Complete. Message sent');
                  </script>
                  <?php
                  $paymenthandler = $_SESSION['username'];
                  //update log
                  $sql_query = "INSERT INTO logs(dateposted,amtpaid,whopaid,paymenthandler) VALUES('$lolastpaiddate','$payment','$whopaid','$paymenthandler')";
                  mysql_query($sql_query);
            }
            if ($payment >= $currentpool && $payment > 0)
                {
            ?>
            <script type="text/javascript">
            alert('You entered an invalid amount.');
              </script>
              <?php
                }
}


if(isset($_POST['btn-cancel']))
{
 header("Location: $_SERVER[PHP_SELF]");
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
  <script src="../include/dashstyle/js/jquery.edatagrid.js" type="text/javascript"></script>
	<script src="../include/dashstyle/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="..//include/dashstyle/js/jquery.equalHeight.js"></script>
</head>

<body>
  <h4 class="alert_warning">Direct Cash Payments coming into your account requires you to process it personally due to security purposes.</h4>
  <article class="module width_full">
  <header><h3 class="tabs_involved">Manage Payment</h3>
  </header>
  		<div class="module_content">
  			<div class="tab_content">
          <table cellpadding="4" >
            <tr>
              <th><h3>Customer Name:</h3></th>
              <th><h4><?php echo $fetched_row['first_name']; ?> <?php echo $fetched_row['middle_name']; ?> <?php echo $fetched_row['last_name']; ?> </h4></th>
              <th></th>
              <th></th>
              <th></th>
              <th><p>picture here maybe</p></th>
            </tr>
            <tr>
              <th><h3>Loan Type:</h3> </th>
              <th><h4><?php echo $fetched_row['loantype']; ?></h4></th>
            </tr>
            <tr>
              <th><h3>Current Balance:</h3></th>
              <th><h2><font color="red"><?php echo $fetched_row['locurrentamt']; ?></font></h2></th>
            </tr>
              <tr>
                <th><h3>Loan Cycle</h3></th>
                <th><h4><?php echo $fetched_row['loancycle']; ?></h4></th>
            </tr>
            <tr>
              <th><h3>Last Paid Amount: </h3></th>
              <th><h4><?php echo $fetched_row['lolastpaidamt']; ?></h4></th>
            </tr>
            <tr>
              <th><h3>Last Paid Date: </h3></th>
              <th><h4><?php echo $fetched_row['lolastpaiddate']; ?></h4></th>
              </tr>
            <tr>
              <th><h3>Current Savings Pool Amount:</h3></th>
              <th><h2><font color="blue"><?php echo $fetched_row['locurrentpool']; ?></h2></font></th>
            </tr>
            <tr>
              <th><h3>Interest Rate:</h3></th>
              <th><h4><?php echo $fetched_row['interestrate']; ?>%</h4></th>
            </tr>
          </table>
          <hr/>
            <table cellpadding="4" >
              <tr>
                  <form method="post">
                <th><h3><font color="Green">Payment Amount:</h3></th></font>
                <th><input type="number" name="payment"</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </table>
    </div>
  </div>
  <footer>
  <div class="submit_link">
  <button type="submit" class="alt_btn" name="btn-update"><strong>Process Payment using your Savings</strong></button> <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
  </div>
</footer>
  </article>
  </form>
  <br/>
  <br/>
  <br/>
  </body>

</html>
