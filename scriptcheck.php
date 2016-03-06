<?php
require('include/dbconfig.php');

$result2 = mysql_query("SELECT * FROM users");
$num_rows = mysql_num_rows($result2);
$numrowsadjust = ++$num_rows;

for ($x = $num_rows; $x <= $numrowsadjust; $x++){
$sql_query="SELECT * FROM $tbl_name WHERE user_id='$x' LIMIT 1";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
  {
  //$user_id=$row['0'];
  //$first_name = $row['1']; Display stuff for debugging
  date_default_timezone_set('Australia/Perth');
  $alpha=date("Y/m/d");
  $omega=$row['20'];
    // RETURN FALSE IF THE DATES ARE BOGUS
        if (!$a = strtotime($alpha)) return FALSE;
        if (!$z = strtotime($omega)) return FALSE;
  // MAN PAGE http://php.net/manual/en/function.gregoriantojd.php
        $a_jd = GregorianToJD( date('m', $a), date('d', $a), date('Y', $a) );
        $z_jd = GregorianToJD( date('m', $z), date('d', $z), date('Y', $z) );
    $countdowndate = $z_jd - $a_jd;

      if ($countdowndate == 0 && $countdowndate >= 0){

      $dueamt = $row['76'];
      $dueinterest = $row['82'];
      $interestactual = ($dueinterest / 100);
      $interestcharge = $dueamt * $interestactual;
      $finalinterest = $interestcharge + $dueamt;
      $first_name = $row['1'];

      $addthis = "UPDATE users SET locurrentamt='$finalinterest' WHERE user_id='$x'";
      mysql_query($addthis);
      }
  }
  die(mysql_error());
}
?>
