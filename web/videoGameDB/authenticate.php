<?php
   session_start();
   $_SESSION['userid'] = 1;
   header("Location: profile.php");
?>
