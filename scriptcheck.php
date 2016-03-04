<?php
require('../include/dbconfig.php');

$sql_query="SELECT * FROM users";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{

// row 22 - due datedue
// row 78 - locurrentamt
//row 84 - interestrate


// FOR EACH DATABASE ENTRY CHECK THE JOO DIT AND IF JUDITH = 0

date_default_timezone_set('Australia/Perth');
$alpha=date("Y/m/d");
$omega=$row[22];

  // RETURN FALSE IF THE DATES ARE BOGUS
      if (!$a = strtotime($alpha)) return FALSE;
      if (!$z = strtotime($omega)) return FALSE;

      // MAN PAGE http://php.net/manual/en/function.gregoriantojd.php
      $a_jd = GregorianToJD( date('m', $a), date('d', $a), date('Y', $a) );
      $z_jd = GregorianToJD( date('m', $z), date('d', $z), date('Y', $z) );

  $countdowndate = $z_jd - $a_jd;

  if ($countdowndate === 0){

$judita = $row[78];
$juditinterest = $row[84];
$newjudit =$judita * $juditinterest;

// $sql_query = "UPDATE users SET locurrentamt = '$newjudit";

}

}
?>
