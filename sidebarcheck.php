<?php
if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin")
 {
  include('/admin/sidebar.php');
    }
    elseif(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "superuser")
     {
      include('/superuser/sidebar.php');
      }
        elseif(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "user")
           {
            include('/user/sidebar.php');
          }
    else
    {
      include('sidebar.php');
    }
?>
