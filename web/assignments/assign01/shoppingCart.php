<?php
   // start the session
   session_start();
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

<form class="container" action="" method="post">
   <!-- full name and email -->
   <h3 class="row">Information</h3>
   <div class="row">
      <span class="col">
         Full name
      </span>
      <span class="col">
         <input name="name" type="name" autofocus>
      </span>
      <span class="col">
      </span>
   </div>
   <div class="row pt-3">
      <span class="col">
         Email
      </span>
      <span class="col">
         <input name="email" type="email">
      </span>
      <span class="col"> </span>
   </div>

   <!-- Items -->
   <h3 class="row">Item</h3>

   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Stormlight Archive: The Way of Kings">
      <label class="form-check-label" for="Stormlight Archive: The Way of Kings">Stormlight Archive: The Way of Kings</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Stormlight Archive: Words of Radiance">
      <label class="form-check-label" for="Stormlight Archive: Words of Radiance">Stormlight Archive: Words of Radiance</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Stormlight Archive: Oathbringer">
      <label class="form-check-label" for="Stormlight Archive: Oathbringer">Stormlight Archive: Oathbringer</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: Final Empire">
      <label class="form-check-label" for="Mistborn: Final Empire">Mistborn: Final Empire</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: The Well of Ascencion">
      <label class="form-check-label" for="Mistborn: The Well of Ascencion">Mistborn: The Well of Ascencion</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: The Hero of Ages">
      <label class="form-check-label" for="Mistborn: The Hero of Ages">Mistborn: The Hero of Ages</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: The Alloy of Law">
      <label class="form-check-label" for="Mistborn: The Alloy of Law">Mistborn: The Alloy of Law</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: Shadows of Self">
      <label class="form-check-label" for="Mistborn: Shadows of Self">Mistborn: Shadows of Self</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Mistborn: Bands of Mourning">
      <label class="form-check-label" for="Mistborn: Bands of Mourning">Mistborn: Bands of Mourning</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Elantris">
      <label class="form-check-label" for="Elantris">Elantris</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Warbreaker">
      <label class="form-check-label" for="Warbreaker">Warbreaker</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="White Sand: Volume 1">
      <label class="form-check-label" for="White Sand: Volume 1">White Sand: Volume 1</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="White Sand: Volume 2">
      <label class="form-check-label" for="White Sand: Volume 2">White Sand: Volume 2</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="White Sand: Volume 3">
      <label class="form-check-label" for="White Sand: Volume 3">White Sand: Volume 3</label>
   </div>
   <div class="form-check">
      <input  class="form-check-input" type="checkbox" name="books" value="" id="Collection: Arcanum Unbounded">
      <label class="form-check-label" for="Collection: Arcanum Unbounded">Collection: Arcanum Unbounded</label>
   </div>
   <input class="row my-4 btn btn-primary" type="submit" value="View Cart">
</form>

<footer class="footer">
   <?php include '../../shared/footer.php'?>
</footer>

</body>
</html>
