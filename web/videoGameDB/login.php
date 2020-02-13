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
   <link rel="stylesheet" href="/index.css">
</head>
<body>
<header>
<?php
   require 'dbConnect.php';
   $db = getDb();
?>
   <div class="jumbotron jumbotron-fluid text-center bg-white">
      <h1>Database Assignment</h1>
      <span>Display the database of games</span>
   </div>

</header>

<div class="container">
   <form action="" method="post">
      <div class="form-row">
         <div class="col">
            <input class="form-control" type="email" name="email" placeholder="Enter email">
         </div>
         <div class="col">
            <input class="form-control" type="password" name="password" placeholder="Enter password">
         </div>

         <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </form>
</div>

<footer class="footer">
   <?php include '../shared/footer.php' ?>
</footer>
</body>
</html>

