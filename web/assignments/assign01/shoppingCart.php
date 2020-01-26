<?php
   // start the session
   session_start();
   $_SESSION['cart']=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Shopping Cart</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../../../index.css"></head>
<body>

<header>
   <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
      <h1>Shopping Cart</h1>
      <span>Select your books</span>
   </div>
   <?php include '../../shared/menu.php'?>
</header>

</br>

<form class="container" action="viewCart.php" method="post">

   <!-- Books -->
   <h3 class="row">Books</h3>

   <h4 class="row">Stormlight Archive Series</h4>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="The Way of Kings" name="books[]" id="StormlightArchive:TheWayofKings">
      <label class="form-check-label" for="StormlightArchive:TheWayofKings">
         The Way of Kings
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Words of Radiance" name="books[]" id="StormlightArchive:WordsofRadiance">
      <label class="form-check-label" for="StormlightArchive:WordsofRadiance">
         Words of Radiance
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Oathbringer" name="books[]" id="StormlightArchive:Oathbringer">
      <label class="form-check-label" for="StormlightArchive:Oathbringer">
         Oathbringer
      </label>
   </div>

   <h4 class="row">Mistborn Series</h4>
   <h5>Era 1</h5>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Final Empire" name="books[]" id="Mistborn:FinalEmpire">
      <label class="form-check-label" for="MistbornFinalEmpire">
         Final Empire
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="The Well of Ascencion" name="books[]" id="Mistborn:TheWellofAscencion">
      <label class="form-check-label" for="MistbornTheWellofAscencion">
         The Well of Ascencion
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="The Hero of Ages" name="books[]" id="Mistborn:TheHeroofAges">
      <label class="form-check-label" for="Mistborn:TheHeroofAges">
         The Hero of Ages
      </label>
   </div>


   <h5>Era 2</h5>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="The Alloy of Law" name="books[]" id="Mistborn:TheAlloyofLaw">
      <label class="form-check-label" for="Mistborn:TheAlloyofLaw">
         The Alloy of Law
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Shadows of Self" name="books[]" id="Mistborn:ShadowsofSelf">
      <label class="form-check-label" for="Mistborn:ShadowsofSelf">
         Shadows of Self
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Bands of Mourning" name="books[]" id="Mistborn:BandsofMourning">
      <label class="form-check-label" for="Mistborn:BandsofMourning">
         Bands of Mourning
      </label>
   </div>

   <h4 class="row">Stand Alone Novels</h4>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Elantris" name="books[]" id="SelElantris">
      <label class="form-check-label" for="SelElantris">
         Elantris
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Warbreaker" name="books[]" id="NalthisWarbreaker">
      <label class="form-check-label" for="NalthisWarbreaker">
         Warbreaker
      </label>
   </div>

   <h4 class="row">White Sand Graphic Novels</h4>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="White Sand: Volume 1" name="books[]" id="WhiteSand:Volume1">
      <label class="form-check-label" for="WhiteSand:Volume1">
         White Sand: Volume 1
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="White Sand: Volume 2" name="books[]" id="WhiteSand:Volume2">
      <label class="form-check-label" for="WhiteSand:Volume2">
         White Sand: Volume 2
      </label>
   </div>

   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="White Sand: Volume 3" name="books[]" id="WhiteSand:Volume3">
      <label class="form-check-label" for="WhiteSand:Volume3">
         White Sand: Volume 3
      </label>
   </div>

   <h4 class="row">Collections</h4>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Arcanum Unbounded" name="books[]" id="Collection:ArcanumUnbounded">
      <label class="form-check-label" for="Collection:ArcanumUnbounded">
         Arcanum Unbounded
      </label>
   </div>

   <input class="row my-4 btn btn-primary" type="submit" value="View Cart">
</form>

<footer class="footer">
   <?php include '../../shared/footer.php'?>
</footer>


</body>
</html>
