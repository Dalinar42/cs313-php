<?php
   // start session
   session_start();
   // save session variables into local variables
   $a = $_SESSION["favcolor"];
   $b = $_SESSION["favanimal"];
?>
<h1>Your favorite color is: <?=$a?> and your favorite animal is <?=$b ?></h1>
<?php if (isset($_SESSION['pictureUrl'])) { ?>
<h3>From the form</h3>
   <image src="<?=$_SESSION['pictureUrl'] ?>"
<?php } ?>
