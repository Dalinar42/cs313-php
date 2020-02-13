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
   <!-- <link rel="stylesheet" id="dashicons-css" href="https://z9t4u9f6.stackpathcdn.com/wp-includes/css/dashicons.min.css?ver=5.3.2" type="text/css" media="all">
   <link rel="stylesheet" id="admin-bar-css" href="https://z9t4u9f6.stackpathcdn.com/wp-includes/css/admin-bar.min.css?ver=5.3.2" type="text/css" media="all">
   <link rel="stylesheet" id="wp-block-library-css" href="https://z9t4u9f6.stackpathcdn.com/wp-includes/css/dist/block-library/style.min.css?ver=5.3.2" type="text/css" media="all">
   <link rel="stylesheet" id="wc-block-style-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.5.11" type="text/css" media="all">
   <link rel="stylesheet" id="contact-form-7-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.6" type="text/css" media="all">
   <link rel="stylesheet" id="wsl-widget-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.3.2" type="text/css" media="all"> -->
   <link rel="stylesheet" id="compiled.css-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/themes/mdbootstrap4/css/compiled-4.12.0.min.css?ver=4.12.0" type="text/css" media="all">
   <link rel="stylesheet" href="/index.css">
</head>
<body>
<header>
   <div class="jumbotron jumbotron-fluid text-center blue-gradient text-white mb-5">
      <h1>Hello, </h1>
      <h3>Welcome to your homepage</h3>
   </div>

   <?php
      require 'dbConnect.php';
      $db = getDb();
   ?>
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
            $gamename = $fRow["gamename"];
            $id = $fRow['id'];
            echo "<tr><td>$id</td><td>$gamename</td></tr>";
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
