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
   <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
      <h1>Assignments</h1>
      <span>All my hard work</span>
   </div>
   <?php include '../shared/menu.php'; ?>
</header>


<table class="table table-bordered container">
   <thead class="thead-dark">
      <tr>
         <th scope="col">ID</th>
         <th scope="col">Name</th>
      </tr>
   </thead>
   <tbody>
      <?php
         $event = $db->prepare("SELECT * FROM game_list");
         $event->execute();
         while ($fRow = $event->fetch(PDO::FETCH_ASSOC))
         {
            $game_name = $fRow["game_name"];
            $id = $fRow['id'];
            echo "<tr><td>$id</td><td>$game_name</td></tr>";
         }
      ?>
   </tbody>
</table>

<!-- <div class="container-fluid">
   <form action="">
      <input type="text">
   </form>
</div> -->


<footer class="footer">
   <?php include '../shared/footer.php' ?>
</footer>
</body>
</html>
