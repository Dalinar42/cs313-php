<?php
   session_start();
   require 'dbConnect.php';
   $db = getDb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Index</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" id="compiled.css-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/themes/mdbootstrap4/css/compiled-4.12.0.min.css?ver=4.12.0" type="text/css" media="all">
   <link rel="stylesheet" href="../index.css">
</head>
<body>
<header>
   <div class="jumbotron jumbotron-fluid text-center blue-gradient text-white mb-5">
      <h1>Video Game Tracker</h1>
      <h3>Add it once and keep track forever</h3>
   </div>
</header>

<form class="container" action="login.php">
   <button class="btn btn-primary">Login</button>
</form>

<footer class="footer">
   <?php include '../shared/footer.php' ?>
</footer>
</body>
</html>
