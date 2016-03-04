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
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data

 //escape stuff because Robert Drop Tables
$first_name = stripslashes($first_name);
$last_name = stripslashes($last_name);
$city_name = stripslashes($city_name);
$first_name = mysql_real_escape_string($first_name);
$last_name = mysql_real_escape_string($last_name);
$city_name = mysql_real_escape_string($city_name);

 // sql query for update data into database
 $sql_query = "UPDATE users SET

 first_name='$first_name',
 last_name='$last_name',
 user_city='$city_name',



 WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Updated Successfully');
  window.location.href='crudindex';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
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
  <form method="post">
  <article class="module width_full">
  <header><h3 class="tabs_involved">Principal Borrower Information</h3>
  </header>
  		<div class="module_content">
  			<div id="tab1" class="tab_content">
          <table cellpadding="4">
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

  <article class="module width_full">
  <header><h3 class="tabs_involved">Spouse Information</h3>
  </header>
  		<div class="module_content">

          <table cellpadding="4">
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

  <article class="module width_full">
  <header><h3 class="tabs_involved">Co-Borrower #1 Information</h3>
  </header>
  		<div class="module_content">
          <table cellpadding="4">
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
              <th><p>Phone Number:</p></th>
              <th><p>Cellphone Number:</p></th>
              <th><p>Birthdate:</p></th>
              <th><p>Age:</p></th>
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
              <th><p>Civil Status:</p></th>
              <th><p>Educational Attainment:</p></th>
              <th><p>Home Address:</p></th>
              <th><p>Provincial Address:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="coreligion" placeholder="Religion" value="<?php echo $fetched_row['religion']; ?>"/></th>
              <th>
                <select name="cocivilstatus" value="<?php echo $fetched_row['cocivilstatus']; ?>">
                  <option value="Single" <?php if ($fetched_row['cocivilstatus'] == "Single") { echo " selected"; } ?>>Single</option>
                  <option value="Married" <?php if ($fetched_row['cocivilstatus'] == "Married") { echo " selected"; } ?>>Married</option>
                  <option value="Widowed" <?php if ($fetched_row['cocivilstatus'] == "Widowed") { echo " selected"; } ?>>Widowed</option>
                  <option value="Separated" <?php if ($fetched_row['cocivilstatus'] == "Separated") { echo " selected"; } ?>>Separated</option>
                </select>
              </th>
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

  <article class="module width_full">
  <header><h3 class="tabs_involved">Co-Borrower #2 Information</h3>
  </header>
  		<div class="module_content">

        <table cellpadding="4">
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
            <th><p>Phone Number:</p></th>
            <th><p>Cellphone Number:</p></th>
            <th><p>Birthdate:</p></th>
            <th><p>Age:</p></th>
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
  </div>
  </article>
  </form>
  <br/>
  <br/>
  <br/>
</body>

</html>
