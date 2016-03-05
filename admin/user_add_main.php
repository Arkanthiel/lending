<?php
include_once 'admincheck.php';
include_once '../include/dbconfig.php';

if(isset($_POST['btn-save']))
{ // variables for input data
 $username =  $_POST['username'];
 $password =  $_POST['password'];
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
 $username =  stripslashes($username);
 $password =  stripslashes($password);
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
 $username =  mysql_real_escape_string($username);
 $password =  mysql_real_escape_string($password);
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

// sql query for inserting data into database

        $sql_query = "INSERT INTO
        users(
        username,
        password,
        first_name,
        middle_name,
        last_name,
        nick_name,
        gender,
        email,
        phonenum,
        cellphone,
        birthdate,
        religion,
        civilstatus,
        education,
        homeadd,
        provadd,
        loancycle,
        dailyamt,
        dailysave,
        datedue,
        loantype,
        locurrentamt,
        lolastpaidamt,
        lolastpaiddate,
        sfirst_name,
        smiddle_name,
        slast_name,
        snick_name,
        sbirthdate,
        semployer,
        sposition,
        cofirst_name,
        comiddle_name,
        colast_name,
        conick_name,
        cocell,
        cobirthdate,
        coage,
        coreligion,
        coeduc,
        cobusiness,
        cobusinessadd,
        coincome,
        coexpenses,
        ctfirst_name,
        ctmiddle_name,
        ctlast_name,
        ctnick_name,
        ctgender,
        ctcell,
        ctbirthdate,
        ctage,
        ctreligion,
        ctcivlstatus,
        cteduc,
        cthomeadd,
        ctprovadd,
        ctbusiness,
        ctbusinessadd,
        ctincome,
        ctexpenses
        )
        VALUES(

        '$username',
        '$password',
        '$first_name',
        '$middle_name',
        '$last_name',
        '$nick_name',
        '$gender',
        '$email',
        '$phonenum',
        '$cellphone',
        '$birthdate',
        '$religion',
        '$civilstatus',
        '$education',
        '$homeadd',
        '$provadd',
        '$loancycle',
        '$dailyamt',
        '$dailysave',
        '$datedue',
        '$loantype',
        '$locurrentamt',
        '$lolastpaidamt',
        '$lolastpaiddate',
        '$sfirst_name',
        '$smiddle_name',
        '$slast_name',
        '$snick_name',
        '$sbirthdate',
        '$semployer',
        '$sposition',
        '$cofirst_name',
        '$comiddle_name',
        '$colast_name',
        '$conick_name',
        '$cocell',
        '$cobirthdate',
        '$coage',
        '$coreligion',
        '$coeduc',
        '$cobusiness',
        '$cobusinessadd',
        '$coincome',
        '$coexpenses',
        '$ctfirst_name',
        '$ctmiddle_name',
        '$ctlast_name',
        '$ctnick_name',
        '$ctgender',
        '$ctcell',
        '$ctbirthdate',
        '$ctage',
        '$ctreligion',
        '$ctcivlstatus',
        '$cteduc',
        '$cthomeadd',
        '$ctprovadd',
        '$ctbusiness',
        '$ctbusinessadd',
        '$ctincome',
        '$ctexpenses'
        )";
        mysql_query($sql_query);

// sql query for inserting data into database
 }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}
  </script>
</head>
<body>
  <form method="post">

    <article class="module width_full_real">
    <header><h3 class="tabs_involved">Account Details</h3>
    </header>
        <div class="module_content">
          <div id="tab1">
            <table class="tablesorter" cellpadding="4" >
              <tr>
                <th><p>Username:</p></th>
                <th><p>Password:</p></th>
                <th><p>Confirm Password:</p></th>
                <th><p>Email:</p></th>
                </tr>
              <tr>
                <th><input type="text" name="username" required=""/></th>
                <th><input type="password" name="password" id="pass1" required=""/></th>
                <th><input type="password" id="pass2" onkeyup="checkPass(); return false;" required=""/> <br/>  <sub><span id="confirmMessage" class="confirmMessage"></span></sub></th>
                <th><input type="email" name="email" placeholder="Email" required="" /></th>
                <th></th>
            </table>
      </div>
    </div>
    </article>

  <article class="module width_full_real">
  <header><h3 class="tabs_involved">Principal Borrower Information</h3>
  </header>
  		<div class="module_content">
  			<div id="tab2">
          <table class="tablesorter" cellpadding="4">
            <tr>
              <th><p>First Name:</p></th>
              <th><p>Middle Name:</p></th>
              <th><p>Last Name:</p></th>
              <th><p>Nick Name:</p></th>
              <th><p>Gender:</p></th>
            </tr>
            <tr>
              <th><input type="text" name="first_name" placeholder="First Name"/></th>
              <th><input type="text" name="middle_name" placeholder="Middle Name"/></th>
              <th><input type="text" name="last_name" placeholder="Last Name"/></th>
              <th><input type="text" name="nick_name" placeholder="Nick Name"/></th>
              <th>
                <select name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                </select>
              </th>

            </tr>
            <tr>
              <th><p>Phone Number:</p></th>
              <th><p>Cellphone Number:</p></th>
              <th><p>Birthdate:</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="phonenum" placeholder="Phone Number"/></th>
              <th><input type="text" name="cellphone" placeholder="Cellphone Number"/></th>
              <th><input type="date" name="birthdate" placeholder="Birthdate"/></th>
              <th></th>
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
              <th><input type="text" name="religion" placeholder="Religion"/></th>
              <th>
                <select name="civilstatus">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                </select>
              </th>
              <th>
                <select name="education">
                  <option value="Pre-High">Pre-High School</option>
                  <option value="Highschool">High School Diploma</option>
                  <option value="CollegeUndergrad">Some College</option>
                  <option value="Bachelor">Bachelor's degree</option>
                  <option value="Masters">Master's Degree</option>
                  <option value="Doctorate">Doctorate Degree</option>
                </select>
              </th>
              <th><input type="text" name="homeadd" placeholder="Cellphone Number"/></th>
              <th><input type="text" name="provadd" placeholder="Cellphone Number"/></th>
            </tr>
            <tr>
              <th><p>Loan Cycle</p></th>
              <th><p>Daily Amount</p></th>
              <th><p>Daily Savings</p></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="date" name="loancycle" placeholder="Loan Cycle"/></th>
              <th><input type="text" name="dailyamt" placeholder="Daily Amount"/></th>
              <th><input type="text" name="dailysave" placeholder="Daily Save"/></th>
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
              <th><input type="date" name="datedue" placeholder="Date Due"/></th>
              <th></th>
              <th>
                  <select name="loantype">
                        <option value="New">New Loan</option>
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
              <th><input type="text" name="locurrentamt" placeholder="Date Due"/></th>
              <th><input type="text" name="lolastpaidamt" placeholder="Last Paid Amount"/></th>
              <th><input type="date" name="lolastpaiddate" placeholder="Date Due"/></th>
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
              <th><input type="text" name="sfirst_name" placeholder="First Name"/></th>
              <th><input type="text" name="smiddle_name" placeholder="First Name"/></th>
              <th><input type="text" name="slast_name" placeholder="Last Name" /></th>
              <th><input type="text" name="snick_name" placeholder="Last Name"  /></th>
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
              <th><input type="date" name="sbirthdate"/></th>
              <th><input type="text" name="semployer" placeholder="Spouse Emplyer" /></th>
              <th><input type="text" name="sposition" placeholder="Spouse Position"/></th>
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
              <th><input type="text" name="cofirst_name" placeholder="First Name"/></th>
              <th><input type="text" name="comiddle_name" placeholder="Middle Name"/></th>
              <th><input type="text" name="colast_name" placeholder="Last Name" /></th>
              <th><input type="text" name="conick_name" placeholder="Nick Name" /></th>
              <th>
                <select name="cogender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
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
              <th><input type="text" name="cocell" placeholder="Cellphone Number"/></th>
              <th><input type="date" name="cobirthdate" placeholder="Birthdate"/></th>
              <th><input type="text" name="coage" placeholder="Phone Number"/></th>
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
              <th><input type="text" name="coreligion" placeholder="Religion"/></th>
              <th></th>
              <th>
                <select name="coeduc">
                  <option value="Pre-High">Pre-High School</option>
                  <option value="Highschool">High School Diploma</option>
                  <option value="CollegeUndergrad">Some College</option>
                  <option value="Bachelor">Bachelor's degree</option>
                  <option value="Masters">Master's Degree</option>
                  <option value="Doctorate">Doctorate Degree</option>
                </select>
              </th>
              <th><input type="text" name="cohomeadd"/></th>
              <th><input type="text" name="coprovadd"/></th>
            </tr>
            <tr>
              <th><p>Business Name:</p></th>
              <th><p>Business Address:</p></th>
              <th><p>Estimated Monthly Income:</p></th>
              <th><p>Estimated Monthly Expenses:</p></th>
              <th></th>
            </tr>
            <tr>
              <th><input type="text" name="cobusiness" /></th>
              <th><input type="text" name="cobusinessadd"/></th>
              <th><input type="text" name="coincome"/></th>
              <th><input type="text" name="coexpenses"/></th>
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
            <th><input type="text" name="ctfirst_name" placeholder="First Name"/></th>
            <th><input type="text" name="ctmiddle_name" placeholder="Middle Name"/></th>
            <th><input type="text" name="ctlast_name" placeholder="Last Name" /></th>
            <th><input type="text" name="ctnick_name" placeholder="Nick Name" /></th>
            <th>
              <select name="ctgender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
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
            <th><input type="text" name="ctcell" placeholder="Cellphone Number" /></th>
            <th><input type="date" name="ctbirthdate" placeholder="Birthdate"/></th>
            <th><input type="text" name="ctage" placeholder="Phone Number"/></th>
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
            <th><input type="text" name="ctreligion" placeholder="Religion"/></th>
            <th>
              <select name="ctcivlstatus">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
              </select>
            </th>
            <th>
              <select name="cteduc">
                <option value="Pre-High">Pre-High School</option>
                <option value="Highschool">High School Diploma</option>
                <option value="CollegeUndergrad">Some College</option>
                <option value="Bachelor">Bachelor's degree</option>
                <option value="Masters">Master's Degree</option>
                <option value="Doctorate">Doctorate Degree</option>
              </select>
            </th>
            <th><input type="text" name="cthomeadd" placeholder="Cellphone Number"  /></th>
            <th><input type="text" name="ctprovadd" placeholder="Cellphone Number"  /></th>
          </tr>
          <tr>
            <th><p>Business Name:</p></th>
            <th><p>Business Address:</p></th>
            <th><p>Estimated Monthly Income:</p></th>
            <th><p>Estimated Monthly Expenses:</p></th>
            <th></th>
          </tr>
          <tr>
            <th><input type="text" name="ctbusiness"/></th>
            <th><input type="text" name="ctbusinessadd"/></th>
            <th><input type="text" name="ctincome"/></th>
            <th><input type="text" name="ctexpenses"/></th>
            <th></th>
          </table>

  </div>
  <footer>
              <div class="submit_link">
  <button type="submit" name="btn-save"><strong>Add User</strong></button> <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
</div>
  </footer>
  </article>
  </form>
  <br/>
  <br/>
  <br/>
  </body>
