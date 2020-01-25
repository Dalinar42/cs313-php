<!DOCTYPE html>
<html lang="en">
<head>
   <title>Austin Nelson</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="index.css">
</head>

<body>

<header>
   <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
      <h1>Austin Nelson</h1>
      <p>Software Engineering</p>
   </div>
   <div>
      <?php include 'shared/menu.php' ?>
   </div>
</header>

<div class="container-fluid">
   <div class="row">
      <h4 class="col text-center">About Me</h4>
      <h4 class="col text-center">Find more information:</h4>
      <h4 class="col text-center">Assignments</h4>
   </div>

   <div
    class="row p-3">
      <div class="col p-3">
         <div class="float-left pr-3 pt-2">
            <img src="../Images/Family and Me/Me.jpg" class="rounded" alt="picture of me">
         </div>
         <div class="">
            My wife and I have been married for two years and have a beautiful puppy boy named Pinecone. I have been studying Software Engineering for three years, now.
         </div>
      </div>
      <div class="col text-center p-3">
         <div class="divHover"><a href="https://www.linkedin.com/in/austin-nelson-030057134/" class="div">LinkedIn</a> Profile </br></div>
         <div class="divHover"><a href="https://byui.joinhandshake.com/users/12640141">Handshake</a> Profile</div>
      </div>
      <div class="col p-3 text-center">
         <div class="divHover">Follow this <a href="../assignments/assignments.php">link</a> for the Assignments page for CS 313</div>
      </div>

   </div>

   <div class="row">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
   </div>
</div>

<footer class="footer">
   <?php include 'shared/footer.php';?>
</footer>
</body>
</html>
