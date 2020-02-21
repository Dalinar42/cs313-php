<?php
    session_start();
    require 'dbConnect.php';
    $db = getDb();
?>

<!DOCTYPE html>
<head>
   <title>Sign Up!</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" id="compiled.css-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/themes/mdbootstrap4/css/compiled-4.12.0.min.css?ver=4.12.0" type="text/css" media="all">
   <link rel="stylesheet" href="../index.css">
</head>
<script type="text/javascript">

   function checkForm(form)
   {
      testString = /^\w+$/;
      if(!testString.test(form.username.value)) {
         alert("Error: Username must contain only letters, numbers and underscores!");
         form.username.focus();
         return false;
      }
      if(form.password.value != "" && form.password.value == form.password2.value) {
         if(form.password.value.length < 8) {
            alert("Error: Password must contain at least eight characters!");
            form.password.focus();
            return false;
         }
         if(form.password.value == form.username.value) {
            alert("Error: Password must be different from Username!");
            form.password.focus();
            return false;
         }
         testString = /[a-z]/;
         if(!testString.test(form.password.value)) {
            alert("Error: password must contain at least one lowercase letter (a-z)!");
            form.password.focus();
            return false;
         }
      } else {
         alert("Passwords do not match");
         form.password.focus();
         return false;
      }
      return true;
   }

</script>

<header>
   <div class="jumbotron jumbotron-fluid text-center blue-gradient text-white mb-5">
      <h1>Sign Up</h1>
      <h3>Create a profile!</h3>
   </div>
</header>

<body>

<h3><?php echo $_SESSION['errorStr']; ?></h3>

<div class="container">
   <form action="addUser.php" method="post" onsubmit="return checkForm(this);">
      <div class="form-row mb-3">
         <div class="col">
           <label for="email">Email</label>
         </div>
         <div class="col">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
         </div>
      </div>
      <div class="form-row mb-3">
         <div class="col">
           <label for="Password">Password</label>
         </div>
         <div class="col">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
         </div>
      </div>
      <div class="form-row mb-3">
         <div class="col">
           <label for="Confirm Password">Confirm Password</label>
         </div>
         <div class="col">
            <input class="form-control" type="password" name="password2" placeholder="Confirm password" required>
         </div>
      </div>
      <div class="form-row mb-3">
         <div class="col">
           <label for="Username">Username</label>
         </div>
         <div class="col">
            <input class="form-control" type="text" name="username" placeholder="Username" required>
         </div>
      </div>
      <div class="form-row mb-3">
         <div class="col">
            <input class="btn blue-gradient" type="submit" name="create" value="Create"><br><br>
         </div>
      </div>
   </form>
</div>

</body>
</html>
