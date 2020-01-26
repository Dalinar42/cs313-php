<?php
   session_start();
   if (!empty($_POST["books"])) {
      foreach ($_POST["books"] as $key => $value) {
         array_push($_SESSION['cart'], $value);
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>View Cart</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../../../index.css"></head>
</head>
<body>
<header>
   <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
      <h1>View Cart</h1>
      <span>Confirm your items</span>
   </div>
   <?php include '../../shared/menu.php'?>
</header>
   <div class="container">
      <h3 class="row">The items you have added are:</h3>
      <?php
      if (isset($_SESSION['cart'])) {
         # code...
         for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            $temp = $i + 1;
            ?>
            <div class="row">
               <div class="col"><?php echo $temp.". ".$_SESSION['cart'][$i];?></div>
               <div class="col">
                  <button class="btn btn-danger" id=<?php echo "remove".$i; ?>>Remove</button>
               </div>
            </div>
         <?php }
      } ?>

      <div class="row m-5">
         <div class="col">
            <form action="shoppingCart.php">
               <button class="btn btn-info">Return to shop</button>
            </form>
         </div>
         <div class="col">
            <form action="checkout.php">
               <button class="btn btn-info">Checkout</button>
            </form>
         </div>
      </div>

   </div>

<footer class="footer">
   <?php include '../../shared/footer.php'?>
</footer>

</body>
</html>
