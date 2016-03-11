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
 // variables for input data
 $first_name = $_POST['first_name'];
 $middle_name = $_POST['middle_name'];
 $last_name = $_POST['last_name'];
 $nick_name = $_POST['nick_name'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $phonenum = $_POST['phonenum'];
 $cellphone = $_POST['cellphone'];
 $birthdate = $_POST['birthdate'];
 $religion = $_POST['religion'];
 $civilstatus = $_POST['civilstatus'];
 $education = $_POST['education'];
 $homeadd = $_POST['homeadd'];
 $provadd = $_POST['provadd'];
 $loancycle = $_POST['loancycle'];
 $dailyamt = $_POST['dailyamt'];
 $dailysave = $_POST['dailysave'];
 $datedue = $_POST['datedue'];
 $loantype = $_POST['loantype'];
 $locurrentamt = $_POST['locurrentamt'];
 $lolastpaidamt = $_POST['lolastpaidamt'];
 $lolastpaiddate = $_POST['lolastpaiddate'];
 $sfirst_name = $_POST['sfirst_name'];
 $smiddle_name = $_POST['smiddle_name'];
 $slast_name = $_POST['slast_name'];
 $snick_name = $_POST['snick_name'];
 $sbirthdate = $_POST['sbirthdate'];
 $semployer = $_POST['semployer'];
 $sposition = $_POST['sposition'];
 $cofirst_name = $_POST['cofirst_name'];
 $comiddle_name = $_POST['comiddle_name'];
 $colast_name = $_POST['colast_name'];
 $conick_name = $_POST['conick_name'];
 $cocell = $_POST['cocell'];
 $cobirthdate = $_POST['cobirthdate'];
 $coage = $_POST['coage'];
 $coreligion = $_POST['coreligion'];
 $coeduc = $_POST['coeduc'];
 $cobusiness = $_POST['cobusiness'];
 $cobusinessadd = $_POST['cobusinessadd'];
 $coincome = $_POST['coincome'];
 $coexpenses = $_POST['coexpenses'];
 $ctfirst_name = $_POST['ctfirst_name'];
 $ctmiddle_name = $_POST['ctmiddle_name'];
 $ctlast_name = $_POST['ctlast_name'];
 $ctnick_name = $_POST['ctnick_name'];
 $ctgender = $_POST['ctgender'];
 $ctcell = $_POST['ctcell'];
 $ctbirthdate = $_POST['ctbirthdate'];
 $ctage = $_POST['ctage'];
 $ctreligion = $_POST['ctreligion'];
 $ctcivlstatus = $_POST['ctcivlstatus'];
 $cteduc = $_POST['cteduc'];
 $cthomeadd = $_POST['cthomeadd'];
 $ctprovadd = $_POST['ctprovadd'];
 $ctbusiness = $_POST['ctbusinessadd'];
 $ctbusinessadd = $_POST['ctbusiness'];
 $ctincome = $_POST['ctincome'];
 $ctexpenses = $_POST['ctexpenses'];
 // variables for input data

 //escape stuff because Robert Drop Tables
 $first_name = stripslashes($first_name);
 $middle_name = stripslashes($middle_name);
 $last_name = stripslashes($last_name);
 $nick_name = stripslashes($nick_name);
 $gender = stripslashes($gender);
 $email = stripslashes($email);
 $phonenum = stripslashes($phonenum);
 $cellphone = stripslashes($cellphone);
 $religion = stripslashes($religion);
 $civilstatus = stripslashes($civilstatus);
 $education = stripslashes($education);
 $homeadd = stripslashes($homeadd);
 $provadd = stripslashes($provadd);
 $loancycle = stripslashes($loancycle);
 $dailyamt = stripslashes($dailyamt);
 $dailysave = stripslashes($dailysave);
 $loantype = stripslashes($loantype);
 $locurrentamt = stripslashes($locurrentamt);
 $lolastpaidamt = stripslashes($lolastpaidamt);
 $sfirst_name = stripslashes($sfirst_name);
 $smiddle_name = stripslashes($smiddle_name);
 $slast_name = stripslashes($slast_name);
 $snick_name = stripslashes($snick_name);
 $semployer = stripslashes($semployer);
 $sposition = stripslashes($sposition);
 $cofirst_name = stripslashes($cofirst_name);
 $comiddle_name = stripslashes($comiddle_name);
 $colast_name = stripslashes($colast_name);
 $conick_name = stripslashes($conick_name);
 $cocell = stripslashes($cocell);
 $coage = stripslashes($coage);
 $coreligion = stripslashes($coreligion);
 $coeduc = stripslashes($coeduc);
 $cobusiness = stripslashes($cobusiness);
 $cobusinessadd = stripslashes($cobusinessadd);
 $coincome = stripslashes($coincome);
 $coexpenses = stripslashes($coexpenses);
 $ctfirst_name = stripslashes($ctfirst_name);
 $ctmiddle_name = stripslashes($ctmiddle_name);
 $ctlast_name = stripslashes($ctlast_name);
 $ctnick_name = stripslashes($ctnick_name);
 $ctgender = stripslashes($ctgender);
 $ctcell = stripslashes($ctcell);
 $ctage = stripslashes($ctage);
 $ctreligion = stripslashes($ctreligion);
 $ctcivlstatus = stripslashes($ctcivlstatus);
 $cteduc = stripslashes($cteduc);
 $cthomeadd = stripslashes($cthomeadd);
 $ctprovadd = stripslashes($ctprovadd);
 $ctbusiness = stripslashes($ctbusinessadd);
 $ctbusinessadd = stripslashes($ctbusiness);
 $ctincome = stripslashes($ctincome);
 $ctexpenses = stripslashes($ctexpenses);
 // curse you bobby droptables();
 $first_name = mysql_real_escape_string($first_name);
 $middle_name = mysql_real_escape_string($middle_name);
 $last_name = mysql_real_escape_string($last_name);
 $nick_name = mysql_real_escape_string($nick_name);
 $gender = mysql_real_escape_string($gender);
 $email = mysql_real_escape_string($email);
 $phonenum = mysql_real_escape_string($phonenum);
 $cellphone = mysql_real_escape_string($cellphone);
 $religion = mysql_real_escape_string($religion);
 $civilstatus = mysql_real_escape_string($civilstatus);
 $education = mysql_real_escape_string($education);
 $homeadd = mysql_real_escape_string($homeadd);
 $provadd = mysql_real_escape_string($provadd);
 $loancycle = mysql_real_escape_string($loancycle);
 $dailyamt = mysql_real_escape_string($dailyamt);
 $dailysave = mysql_real_escape_string($dailysave);
 $loantype = mysql_real_escape_string($loantype);
 $locurrentamt = mysql_real_escape_string($locurrentamt);
 $lolastpaidamt = mysql_real_escape_string($lolastpaidamt);
 $sfirst_name = mysql_real_escape_string($sfirst_name);
 $smiddle_name = mysql_real_escape_string($smiddle_name);
 $slast_name = mysql_real_escape_string($slast_name);
 $snick_name = mysql_real_escape_string($snick_name);
 $semployer = mysql_real_escape_string($semployer);
 $sposition = mysql_real_escape_string($sposition);
 $cofirst_name = mysql_real_escape_string($cofirst_name);
 $comiddle_name = mysql_real_escape_string($comiddle_name);
 $colast_name = mysql_real_escape_string($colast_name);
 $conick_name = mysql_real_escape_string($conick_name);
 $cocell = mysql_real_escape_string($cocell);
 $coage = mysql_real_escape_string($coage);
 $coreligion = mysql_real_escape_string($coreligion);
 $coeduc = mysql_real_escape_string($coeduc);
 $cobusiness = mysql_real_escape_string($cobusiness);
 $cobusinessadd = mysql_real_escape_string($cobusinessadd);
 $coincome = mysql_real_escape_string($coincome);
 $coexpenses = mysql_real_escape_string($coexpenses);
 $ctfirst_name = mysql_real_escape_string($ctfirst_name);
 $ctmiddle_name = mysql_real_escape_string($ctmiddle_name);
 $ctlast_name = mysql_real_escape_string($ctlast_name);
 $ctnick_name = mysql_real_escape_string($ctnick_name);
 $ctgender = mysql_real_escape_string($ctgender);
 $ctcell = mysql_real_escape_string($ctcell);
 $ctage = mysql_real_escape_string($ctage);
 $ctreligion = mysql_real_escape_string($ctreligion);
 $ctcivlstatus = mysql_real_escape_string($ctcivlstatus);
 $cteduc = mysql_real_escape_string($cteduc);
 $cthomeadd = mysql_real_escape_string($cthomeadd);
 $ctprovadd = mysql_real_escape_string($ctprovadd);
 $ctbusiness = mysql_real_escape_string($ctbusinessadd);
 $ctbusinessadd = mysql_real_escape_string($ctbusiness);
 $ctincome = mysql_real_escape_string($ctincome);
 $ctexpenses = mysql_real_escape_string($ctexpenses);
 // sql query for update data into database
 $sql_query = "UPDATE users SET

 first_name = '$first_name',
 middle_name = '$middle_name',
 last_name = '$last_name',
 nick_name = '$nick_name',
 gender = '$gender',
 email = '$email',
 phonenum = '$phonenum',
 cellphone = '$cellphone',
 birthdate = '$birthdate',
 religion = '$religion',
 civilstatus = '$civilstatus',
 education = '$education',
 homeadd = '$homeadd',
 provadd = '$provadd',
 loancycle = '$loancycle',
 dailyamt = '$dailyamt',
 dailysave = '$dailysave',
 datedue = '$datedue',
 loantype = '$loantype',
 locurrentamt = '$locurrentamt',
 lolastpaidamt = '$lolastpaidamt',
 lolastpaiddate = '$lolastpaiddate',
 sfirst_name = '$sfirst_name',
 smiddle_name = '$smiddle_name',
 slast_name = '$slast_name',
 snick_name = '$snick_name',
 sbirthdate = '$sbirthdate',
 semployer = '$semployer',
 sposition = '$sposition',
 cofirst_name = '$cofirst_name',
 comiddle_name = '$comiddle_name',
 colast_name = '$colast_name',
 conick_name = '$conick_name',
 cocell = '$cocell',
 cobirthdate = '$cobirthdate',
 coage = '$coage',
 coreligion = '$coreligion',
 coeduc = '$coeduc',
 cobusiness = '$cobusiness',
 cobusinessadd = '$cobusinessadd',
 coincome = '$coincome',
 coexpenses = '$coexpenses',
 ctfirst_name = '$ctfirst_name',
 ctmiddle_name = '$ctmiddle_name',
 ctlast_name = '$ctlast_name',
 ctnick_name = '$ctnick_name',
 ctgender = '$ctgender',
 ctcell = '$ctcell',
 ctbirthdate = '$ctbirthdate',
 ctage = '$ctage',
 ctreligion = '$ctreligion',
 ctcivlstatus = '$ctcivlstatus',
 cteduc = '$cteduc',
 cthomeadd = '$cthomeadd',
 ctprovadd = '$ctprovadd',
 ctbusiness = '$ctbusinessadd',
 ctbusinessadd = '$ctbusiness',
 ctincome = '$ctincome',
 ctexpenses = '$ctexpenses'

 WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
   echo("<meta http-equiv='refresh' content='0.01'>");
  ?>
  <script type="text/javascript">
  alert('Data Updated Successfully');
      </script>
    <?php
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
  <?php
  date_default_timezone_set('Australia/Perth');
  $alpha=date("Y/m/d");
  $omega=$fetched_row['datedue'];
  $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
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
  <form method="post">
  <article class="module width_full_real">
      <header><h3 class="tabs_involved">Principal Borrower Information</h3>
  </header>
  		<div class="module_content">
  			<div id="tab1" class="tab_content">
          <table class="tablesorter" cellpadding="4" >
            <tr>
              <th><p>First Name:</p></th>
              <th><p>Middle Name:</p></th>
              <th><p>Last Name:</p></th>
              <th><p>Nick Name:</p></th>
              <th><p>Gender:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>"/></th>
              <th><input type="text" name="middle_name" placeholder="Middle Name" value="<?php echo $fetched_row['middle_name']; ?>"/></th>
              <th><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>"  /></th>
              <th><input type="text" name="nick_name" placeholder="Nick Name" value="<?php echo $fetched_row['nick_name']; ?>"  /></th>
              <th>
                <select name="gender" value="<?php echo $fetched_row['gender']; ?>">
                      <option value="Male" <?php if ($fetched_row['gender'] == "Male") { echo " selected"; } ?>>Male</option>
                      <option value="Female" <?php  if ($fetched_row['gender'] == "Female") { echo " selected"; } ?>>Female</option>
                </select>
              </th>

            </tr>
            <tr>
              <th><p>Email:</p></th>
              <th><p>Phone Number:</p></th>
              <th><p>Cellphone Number:</p></th>
              <th><p>Birthdate:</p></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="email" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>"  /></th>
              <th><input type="text" name="phonenum" placeholder="Phone Number" value="<?php echo $fetched_row['phonenum']; ?>"  /></th>
              <th><input type="text" name="cellphone" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellphone']; ?>"  /></th>
              <th><input type="date" name="birthdate" placeholder="Birthdate" value="<?php echo $fetched_row['birthdate']; ?>"/></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><p>Religion:</p></th>
              <th><p>Civil Status:</p></th>
              <th><p>Educational Attainment:</p></th>
              <th><p>Home Address:</p></th>
              <th><p>Provincial Address:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="religion" placeholder="Religion" value="<?php echo $fetched_row['religion']; ?>"/></th>
              <th>
                <select name="civilstatus" value="<?php echo $fetched_row['civilstatus']; ?>">
                                <option value="Single" <?php if ($fetched_row['civilstatus'] == "Single") { echo " selected"; } ?>>Single</option>
                                <option value="Married" <?php if ($fetched_row['civilstatus'] == "Married") { echo " selected"; } ?>>Married</option>
                                <option value="Widowed" <?php if ($fetched_row['civilstatus'] == "Widowed") { echo " selected"; } ?>>Widowed</option>
                                <option value="Separated" <?php if ($fetched_row['civilstatus'] == "Separated") { echo " selected"; } ?>>Separated</option>
                </select>
              </th>
              <th>
                <select name="education" select="<?php echo $fetched_row['education']; ?>" value="<?php echo $fetched_row['education']; ?>" >
                  <option value="Pre-High" <?php if ($fetched_row['education'] == "Pre-High") { echo " selected"; } ?>>Pre-High School</option>
                  <option value="Highschool" <?php if ($fetched_row['education'] == "Highschool") { echo " selected"; } ?>>High School Diploma</option>
                  <option value="CollegeUndergrad" <?php if ($fetched_row['education'] == "CollegeUndergrad") { echo " selected"; } ?>>Some College</option>
                  <option value="Bachelor" <?php if ($fetched_row['education'] == "Bachelor") { echo " selected"; } ?>>Bachelor's degree</option>
                  <option value="Masters" <?php if ($fetched_row['education'] == "Masters") { echo " selected"; } ?>>Master's Degree</option>
                  <option value="Doctorate <?php if ($fetched_row['education'] == "Doctorate") { echo " selected"; } ?>">Doctorate Degree</option>
                </select>
              </th>
              <th><input type="text" name="homeadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['homeadd']; ?>"  /></th>
              <th><input type="text" name="provadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['provadd']; ?>"  /></th>
            </tr>
            <tr>
              <th><p>Loan Cycle</p></th>
              <th><p>Daily Amount</p></th>
              <th><p>Daily Savings</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="date" name="loancycle" placeholder="Loan Cycle" value="<?php echo $fetched_row['loancycle']; ?>"/></th>
              <th><input type="text" name="dailyamt" placeholder="Daily Amount" value="<?php echo $fetched_row['dailyamt']; ?>"/></th>
              <th><input type="text" name="dailysave" placeholder="Daily Save" value="<?php echo $fetched_row['dailysave']; ?>"/></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><p>Date Due</p></th>
              <th><p></p></th>
              <th><p>Loan Type</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="date" name="datedue" placeholder="Date Due" value="<?php echo $fetched_row['datedue']; ?>"/></th>
              <th></th>
              <th>
                  <select name="loantype" value="<?php echo $fetched_row['loantype']; ?>">
                        <option value="New" <?php if ($fetched_row['loantype'] == "New") { echo " selected"; } ?>>New Loan</option>
                        <option value="Renew" <?php  if ($fetched_row['loantype'] == "Renew") { echo " selected"; } ?>>Renewal Loan</option>
                  </select>
              </th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><p>Current Loan Amount</p></th>
              <th><p>Last Paid Amount</p></th>
              <th><p>Last Paid Date</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="locurrentamt" placeholder="Date Due" value="<?php echo $fetched_row['locurrentamt']; ?>"/></th>
              <th><input type="date" name="lolastpaidamt" placeholder="Last Paid Amount" value="<?php echo $fetched_row['lolastpaidamt']; ?>"/></th>
              <th><input type="date" name="lolastpaiddate" placeholder="Date Due" value="<?php echo $fetched_row['lolastpaiddate']; ?>"/></th>
              <th></th>
              <th></th>
            </tr>
          </table>
    </div>
  </div>
  </article>

  <article class="module width_full_real">
  <header><h3 class="tabs_involved">Spouse Information</h3>
  </header>
  		<div class="module_content">

          <table class="tablesorter" cellpadding="4">
            <tr>
              <th><p>First Name:</p></th>
              <th><p>Middle Name:</p></th>
              <th><p>Last Name:</p></th>
              <th><p>Nick Name:</p></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="sfirst_name" placeholder="First Name" value="<?php echo $fetched_row['sfirst_name']; ?>"/></th>
              <th><input type="text" name="smiddle_name" placeholder="First Name" value="<?php echo $fetched_row['smiddle_name']; ?>"/></th>
              <th><input type="text" name="slast_name" placeholder="Last Name" value="<?php echo $fetched_row['slast_name']; ?>"  /></th>
              <th><input type="text" name="snick_name" placeholder="Last Name" value="<?php echo $fetched_row['snick_name']; ?>"  /></th>
              <th></th>

            </tr>
            <tr>
              <th><p>Birthdate:</p></th>
              <th><p>Employer:</p></th>
              <th><p>Position:</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="date" name="sbirthdate" placeholder="Birthdate" value="<?php echo $fetched_row['sbirthdate']; ?>"/></th>
              <th><input type="text" name="semployer" placeholder="Spouse Emplyer" value="<?php echo $fetched_row['semployer']; ?>"  /></th>
              <th><input type="text" name="sposition" placeholder="Spouse Position" value="<?php echo $fetched_row['sposition']; ?>"/></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </table>
  </div>
  </article>

  <article class="module width_full_real_real">
  <header><h3 class="tabs_involved">Co-Borrower #1 Information</h3>
  </header>
  		<div class="module_content">
          <table class="tablesorter" cellpadding="4">
            <tr>
              <th><p>First Name:</p></th>
              <th><p>Middle Name:</p></th>
              <th><p>Last Name:</p></th>
              <th><p>Nick Name:</p></th>
              <th><p>Gender:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="cofirst_name" placeholder="First Name" value="<?php echo $fetched_row['cofirst_name']; ?>"/></th>
              <th><input type="text" name="comiddle_name" placeholder="Middle Name" value="<?php echo $fetched_row['comiddle_name']; ?>"/></th>
              <th><input type="text" name="colast_name" placeholder="Last Name" value="<?php echo $fetched_row['colast_name']; ?>"  /></th>
              <th><input type="text" name="conick_name" placeholder="Nick Name" value="<?php echo $fetched_row['conick_name']; ?>"  /></th>
              <th>
                <select name="cogender">
                  <option value="Male" <?php if ($fetched_row['cogender'] == "Male") { echo " selected"; } ?>>Male</option>
                  <option value="Female" <?php  if ($fetched_row['cogender'] == "Female") { echo " selected"; } ?>>Female</option>
                </select>
              </th>
            </tr>
            <tr>
              <th><p>Cellphone Number:</p></th>
              <th><p>Birthdate:</p></th>
              <th><p>Age:</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="cocell" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellphone']; ?>"  /></th>
              <th><input type="date" name="cobirthdate" placeholder="Birthdate" value="<?php echo $fetched_row['cobirthdate']; ?>"/></th>
              <th><input type="text" name="coage" placeholder="Phone Number" value="<?php echo $fetched_row['coage']; ?>"  /></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><p>Religion:</p></th>
              <th></th>
              <th><p>Educational Attainment:</p></th>
              <th><p>Home Address:</p></th>
              <th><p>Provincial Address:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="coreligion" placeholder="Religion" value="<?php echo $fetched_row['religion']; ?>"/></th>
              <th></th>
              <th>
                <select name="coeduc" value="<?php echo $fetched_row['coeduc']; ?>">
                  <option value="Pre-High" <?php if ($fetched_row['coeduc'] == "Pre-High") { echo " selected"; } ?>>Pre-High School</option>
                  <option value="Highschool" <?php if ($fetched_row['coeduc'] == "Highschool") { echo " selected"; } ?>>High School Diploma</option>
                  <option value="CollegeUndergrad" <?php if ($fetched_row['coeduc'] == "CollegeUndergrad") { echo " selected"; } ?>>Some College</option>
                  <option value="Bachelor" <?php if ($fetched_row['coeduc'] == "Bachelor") { echo " selected"; } ?>>Bachelor's degree</option>
                  <option value="Masters" <?php if ($fetched_row['coeduc'] == "Masters") { echo " selected"; } ?>>Master's Degree</option>
                  <option value="Doctorate <?php if ($fetched_row['coeduc'] == "Doctorate") { echo " selected"; } ?>">Doctorate Degree</option>
                </select>
              </th>
              <th><input type="text" name="cohomeadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['cohomeadd']; ?>"  /></th>
              <th><input type="text" name="coprovadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['coprovadd']; ?>"  /></th>
            </tr>
            <tr>
              <th><p>Business Name:</p></th>
              <th><p>Business Address:</p></th>
              <th><p>Estimated Monthly Income:</p></th>
              <th><p>Estimated Monthly Expenses:</p></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="cobusiness" placeholder="First Name" value="<?php echo $fetched_row['cobusiness']; ?>"/></th>
              <th><input type="text" name="cobusinessadd" placeholder="Middle Name" value="<?php echo $fetched_row['cobusinessadd']; ?>"/></th>
              <th><input type="text" name="coincome" placeholder="Last Name" value="<?php echo $fetched_row['coincome']; ?>"  /></th>
              <th><input type="text" name="coexpenses" placeholder="Nick Name" value="<?php echo $fetched_row['coexpenses']; ?>"  /></th>
              <th></th>
          </table>
  </div>
  </article>

  <article class="module width_full_real">
  <header><h3 class="tabs_involved">Co-Borrower #2 Information</h3>
  </header>
  		<div class="module_content">
        <table class="tablesorter" cellpadding="4">
          <tr>
            <th><p>First Name:</p></th>
            <th><p>Middle Name:</p></th>
            <th><p>Last Name:</p></th>
            <th><p>Nick Name:</p></th>
            <th><p>Gender:</p></th>
          </tr>
          <tr>
            <th><input type="text" name="ctfirst_name" placeholder="First Name" value="<?php echo $fetched_row['ctfirst_name']; ?>"/></th>
            <th><input type="text" name="ctmiddle_name" placeholder="Middle Name" value="<?php echo $fetched_row['ctmiddle_name']; ?>"/></th>
            <th><input type="text" name="ctlast_name" placeholder="Last Name" value="<?php echo $fetched_row['ctlast_name']; ?>"  /></th>
            <th><input type="text" name="ctnick_name" placeholder="Nick Name" value="<?php echo $fetched_row['ctnick_name']; ?>"  /></th>
            <th>
              <select name="ctgender" value="<?php echo $fetched_row['ctgender']; ?>">
                <option value="Male" <?php if ($fetched_row['ctgender'] == "Male") { echo " selected"; } ?>>Male</option>
                <option value="Female" <?php  if ($fetched_row['ctgender'] == "Female") { echo " selected"; } ?>>Female</option>
              </select>
            </th>
          </tr>
          <tr>
            <th><p>Cellphone Number:</p></th>
            <th><p>Birthdate:</p></th>
            <th><p>Age:</p></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th><input type="text" name="ctcell" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellphone']; ?>"  /></th>
            <th><input type="date" name="ctbirthdate" placeholder="Birthdate" value="<?php echo $fetched_row['ctbirthdate']; ?>"/></th>
            <th><input type="text" name="ctage" placeholder="Phone Number" value="<?php echo $fetched_row['ctage']; ?>"  /></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th><p>Religion:</p></th>
            <th><p>Civil Status:</p></th>
            <th><p>Educational Attainment:</p></th>
            <th><p>Home Address:</p></th>
            <th><p>Provincial Address:</p></th>
          </tr>
          <tr>
            <th><input type="text" name="ctreligion" placeholder="Religion" value="<?php echo $fetched_row['religion']; ?>"/></th>
            <th>
              <select name="ctcivlstatus" value="<?php echo $fetched_row['ctcivlstatus']; ?>">
                <option value="Single" <?php if ($fetched_row['ctcivlstatus'] == "Single") { echo " selected"; } ?>>Single</option>
                <option value="Married" <?php if ($fetched_row['ctcivlstatus'] == "Married") { echo " selected"; } ?>>Married</option>
                <option value="Widowed" <?php if ($fetched_row['ctcivlstatus'] == "Widowed") { echo " selected"; } ?>>Widowed</option>
                <option value="Separated" <?php if ($fetched_row['ctcivlstatus'] == "Separated") { echo " selected"; } ?>>Separated</option>
              </select>
            </th>
            <th>
              <select name="cteduc" value="<?php echo $fetched_row['cteduc']; ?>">
                <option value="Pre-High" <?php if ($fetched_row['cteduc'] == "Pre-High") { echo " selected"; } ?>>Pre-High School</option>
                <option value="Highschool" <?php if ($fetched_row['cteduc'] == "Highschool") { echo " selected"; } ?>>High School Diploma</option>
                <option value="CollegeUndergrad" <?php if ($fetched_row['cteduc'] == "CollegeUndergrad") { echo " selected"; } ?>>Some College</option>
                <option value="Bachelor" <?php if ($fetched_row['cteduc'] == "Bachelor") { echo " selected"; } ?>>Bachelor's degree</option>
                <option value="Masters" <?php if ($fetched_row['cteduc'] == "Masters") { echo " selected"; } ?>>Master's Degree</option>
                <option value="Doctorate <?php if ($fetched_row['cteduc'] == "Doctorate") { echo " selected"; } ?>">Doctorate Degree</option>
              </select>
            </th>
            <th><input type="text" name="cthomeadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['cthomeadd']; ?>"  /></th>
            <th><input type="text" name="ctprovadd" placeholder="Cellphone Number" value="<?php echo $fetched_row['ctprovadd']; ?>"  /></th>
          </tr>
          <tr>
            <th><p>Business Name:</p></th>
            <th><p>Business Address:</p></th>
            <th><p>Estimated Monthly Income:</p></th>
            <th><p>Estimated Monthly Expenses:</p></th>
            <th></th>
          </tr>
          <tr>
            <th><input type="text" name="ctbusiness" placeholder="First Name" value="<?php echo $fetched_row['ctbusiness']; ?>"/></th>
            <th><input type="text" name="ctbusinessadd" placeholder="Middle Name" value="<?php echo $fetched_row['ctbusinessadd']; ?>"/></th>
            <th><input type="text" name="ctincome" placeholder="Last Name" value="<?php echo $fetched_row['ctincome']; ?>"  /></th>
            <th><input type="text" name="ctexpenses" placeholder="Nick Name" value="<?php echo $fetched_row['ctexpenses']; ?>"  /></th>
            <th></th>
          </table>

  </div>
  <footer>
  <div class="submit_link">
  <button type="submit" name="btn-update"><strong>UPDATE</strong></button> <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
  </div>
  </footer>

  </article>
  </form>
  <br/>
  <br/>
  <br/>
  </body>

</html>
