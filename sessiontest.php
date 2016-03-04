<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
//print_r($_SESSION['user']);
//print_r($_SESSION['password']);
//print_r($_SESSION['usertype']);
//print_r($_SESSION['firstname']);
//print_r($_SESSION['lastname']);
echo $_SESSION['usertype'];
echo $_SESSION['username'];
echo $_SESSION['firstname'];
echo $_SESSION['lastname'];
//echo $_SESSION['dicks'][3];
?>

</body>
</html>
