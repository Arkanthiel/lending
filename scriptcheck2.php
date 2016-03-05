<?php
require('include/dbconfig.php');
echo "hello we're working on it. give us a sec";

$sql_query="SELECT user_id, datedue, locurrentamt, interestrate, first_name FROM $tbl_name";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
  {
  $user_id=$row['0'];
  $first_name = $row['4'];
  // FOR EACH DATABASE ENTRY CHECK THE JOO DIT AND IF JUDITH = 0
  date_default_timezone_set('Australia/Perth');
  $alpha=date("Y/m/d");
  $omega=$row['1'];
    // RETURN FALSE IF THE DATES ARE BOGUS
        if (!$a = strtotime($alpha)) return FALSE;
        if (!$z = strtotime($omega)) return FALSE;
  // MAN PAGE http://php.net/manual/en/function.gregoriantojd.php
        $a_jd = GregorianToJD( date('m', $a), date('d', $a), date('Y', $a) );
        $z_jd = GregorianToJD( date('m', $z), date('d', $z), date('Y', $z) );
    $countdowndate = $z_jd - $a_jd;

    echo $omega;
    echo $countdowndate;
    echo $first_name;

  if ($countdowndate == 0 && $countdowndate >= 0){

  $dueamt = $row['2'];
  $dueinterest = $row['3'];
  $interestcharge = $dueamt * $dueinterest;
  $finalinterest = $interestcharge + $dueamt;
  $first_name = $row['4'];
  echo "this shit is workign right?";
  echo $first_name;
  echo $countdowndate;
  echo $user_id;
  echo $dueamt;
  echo $dueinterest;
  echo $interestcharge;
  echo $finalinterest;

  // $sql_query = "UPDATE users SET locurrentamt='$finalinterest' WHERE id='$user_id'";
  }
  }
?>
