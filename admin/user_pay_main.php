<!doctype html>
<?php
//notes: updating works, but no inital edit_id, also refresh isnt auto update
include_once 'admincheck.php';
require('../include/dbconfig.php');

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);

 }


if(isset($_POST['btn-update']))
{
  $payment = filter_var( $_POST['payment'], FILTER_VALIDATE_INT);

       $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
       $result_set=mysql_query($sql_query);
       $fetched_row=mysql_fetch_array($result_set);

  $currentpool = $fetched_row['locurrentpool'];
  $currentamt = $fetched_row['locurrentamt'];
  $interestrate = $fetched_row['interestrate'];
  $lolastpaidamt = filter_var( $_POST['payment'], FILTER_VALIDATE_INT);
  $lolastpaiddate = date("Y/m/d");
  $a = $payment * 0.1; //CurrentPool addition computation
  $b = $payment * 0.9;//Amount that actually goes to paying the Loan
  $c = $a + $currentpool; //adds 10% of the payment to the pool
  $d = $currentamt - $b; //subtracts the 90% from the loan


  $sql_query = "UPDATE users SET locurrentamt = '$d', locurrentpool = '$c', lolastpaidamt = '$payment', lolastpaiddate = '$lolastpaiddate' WHERE user_id=".$_GET['edit_id'];

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Payment Complete. Message sent');
    </script>
    <?php
    $un = "xatm0013";
    $pwd = "E1kopre";
    $cell = $fetched_row['cellphone'];
    $name = $fetched_row['first_name'];
    $message = "Thank%20you%20for%20processing%20your%20payment%20," . $name . "!%20for%20the%20amount%20of%20," . $payment . "";
    $url = "www.isms.com.my/isms_send.php?un=" . $un . "&pwd=" . $pwd . "&dstno=" . $cell . "&msg=" . $message . "&type=1";

    // open connection
    $ch = curl_init();
    // set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    // execute post
    $result = curl_exec($ch);
    // close connection
    curl_close($ch);

    //$link = "<script type='text/javascript'>>window.open('$url')</script>";
    //echo $link;


      //echo("<meta http-equiv='refresh' content='0.01'>");
 }
 else
 {
   ?>
   <script type="text/javascript">
   alert('There was a problem with your request.');
   </script>
   <?php
 }
 // sql query execution function
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
  <h4 class="alert_warning">Please Note that 10% of the payment amount goes to the savings pool instead of the Loan.</h4>
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
              <th><h4><?php echo $fetched_row['locurrentpool']; ?></h4></th>
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
  <button type="submit" class="alt_btn" name="btn-update"><strong>Process Payment</strong></button> <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
  </div>
</footer>
  </article>
  </form>
  <br/>
  <br/>
  <br/>
  </body>

</html>
