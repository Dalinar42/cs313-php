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
      <!-- I want to be able to greet them by username -->
      <h1>Add a Game</h1>
   </div>
</header>

<div class="container">
<form action="insert.php" method="post">
   <div class="row">
      <div class="col">
         <input type="text" class="form-control" placeholder="Game Name" name="gamename">
      </div>

   <div class="col">
      <select id="genre" class="form-control" name="genreid">
         <?php
            $statement = $db->prepare("SELECT * FROM genres");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id   = $row['id'];
               $genrename = $row['genrename'];
               echo "<option value='$id'>$genrename</option>";
            }
            ?>
      </select>
   </div>
   </div>
   <input class="btn purple-gradient" type="submit" value="Submit">
</form>

<form action="profile.php">
   <input type="submit" class="btn peach-gradient" value="Cancel">
</form>

</div>

<footer class="footer">
   <?php include '../shared/footer.php' ?>
</footer>
</body>
</html>
