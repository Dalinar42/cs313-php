<?php
   // start the session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         unset($_SESSION['pictureUrl']);
         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "dolphin";
         // echo that variables have been set
         echo "Session variables have been set</br>";
      ?>
      <a href="thursdaySession2.php">Check the variables on another page</a>


      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="Submit" value="Submit!">
      </form>

      <?php
         if (isset($_POST['Submit'])) {
            $_SESSION['pictureUrl'] = $_POST['picture'];
         }
      ?>
   </body>
</html>
