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
      <h1>Checkout</h1>
      <span>Address collection</span>
   </div>
   <?php include '../../shared/menu.php'?>
</header>

<div class="container">
   <form action="confirmation.php" method="post">
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
      <div class="row pt-3">
         <span class="col">
            Address Line 1
         </span>
         <span class="col">
            <input name="address1" type="address">
         </span>
         <span class="col"> </span>
      </div>
      <div class="row pt-3">
         <span class="col">
            Address Line 2
         </span>
         <span class="col">
            <input name="address2" type="address">
         </span>
         <span class="col"> </span>
      </div>
      <div class="row pt-3">
         <span class="col">
            City, State
         </span>
         <span class="col">
            <input name="cityState" type="text">
         </span>
         <span class="col"> </span>
      </div>
      <div class="row pt-3">
         <span class="col">
            Special Instructions
         </span>
         <span class="col">
            <input name="instructions" type="text-area">
         </span>
         <span class="col"> </span>
      </div>
      <input class="btn btn-info my-3" type="submit" value="Submit Address">

      </form>
</div>

<footer class="footer">
   <?php include '../../shared/footer.php'?>
</footer>
</body>
</html>
