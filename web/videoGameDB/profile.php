<?php
   session_start();
   require 'dbConnect.php';
   if (!isset($_SESSION['userid'])) {
      header("Location: login.php");
   }
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
      <!-- I want to be able to greet them by user name -->
      <?php
         $id = $_SESSION['userid'];
         $getUsername = $db->prepare("SELECT username FROM users WHERE id = $id");
         $getUsername->execute();
         $uRow = $getUsername->fetch(PDO::FETCH_ASSOC);
         $username = $uRow['username'];
      ?>
      <h1>Hello, <?php echo $username; ?></h1>
      <h3>Welcome to your game list</h3>
   </div>
</header>

<div class="container">
   <table class="table table-bordered mb-3">
      <thead class="blue">
         <tr>
            <th scope="col">Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Date Added</th>
         </tr>
      </thead>
      <tbody>
         <?php
            $listGames = $db->prepare("SELECT DISTINCT g.gamename, gn.genrename, g.dateadded FROM game_list g
                                       JOIN users u ON u.id = g.userid
                                       JOIN genres gn ON gn.id = g.genreid
                                       WHERE u.id = $id
                                       ORDER BY g.gamename;
                                       ");
            $listGames->execute();
            while ($fRow = $listGames->fetch(PDO::FETCH_ASSOC))
            {
               $gamename = $fRow["gamename"];
               $genrename = $fRow["genrename"];
               $dateadded = $fRow["dateadded"];

               echo "<tr><td>$gamename</td><td>$genrename</td><td>$dateadded</td></tr>";
            }
         ?>
      </tbody>
   </table>

   <form action="addGame.php">
      <input type="submit" class="btn blue-gradient float-left" value="Add Game">
   </form>
   <form action="deleteGame.php">
      <input type="submit" class="btn blue-gradient float-left" value="Remove Game">
   </form>
   <form action="logout.php">
      <input type="submit" class="btn blue-gradient float-left" value="Logout">
   </form>
</div>

<footer class="footer">
   <?php include '../shared/footer.php' ?>
</footer>
</body>
</html>
