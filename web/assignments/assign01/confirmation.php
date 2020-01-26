<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Checkout</title>
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
      <h1>Confirmation</h1>
      <span>Your Order</span>
   </div>
   <?php include '../../shared/menu.php'?>
</header>

<?php
   $name = $_POST["name"];
   $email = $_POST["email"];
   $address1 = $_POST["address1"];
   $address2 = $_POST["address2"];
   $cityState = $_POST["cityState"];
   $instructions = $_POST["instructions"];
?>
   <div class="container">
      <?php echo "Hello, $name<br>
      Your email is $email<br>
      Your order will be shipped to</br>$address1<br>$address2<br>$cityState</br>
      With the instructions \"$instructions\""; ?>
      <H5>Your order:</H5>
      <?php
         if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
               $temp = $key + 1;
               echo "$temp. $value</br>";
            }
         }
      ?>
   </div>



<footer class="footer">
   <?php include '../../shared/footer.php'?>
</footer>
</body>
</html>
