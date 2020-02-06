<?php
   function getDB() {
      $db = NULL;
      try
      {
      $dbUrl = getenv('DATABASE_URL');

      $dbOpts = parse_url($dbUrl);

      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $ex)
      {
         echo 'Error!: ' . $ex->getMessage();
         die();
      }
      return $db;
   }

   $db = getDb();

   $event = $db->prepare("SELECT * FROM w5_event");
   $event->execute();
   while ($fRow = $event->fetch(PDO::FETCH_ASSOC))
   {
      $name = $fRow["name"];
      $image = $fRow["image"];
      $id = $fRow['id'];
      echo "<img src=\"$image\" alt=\"$name\">";
      echo "<h3>$name</h3";
   }


?>
