<?php
   require "dbConnect.php";
   $db = getDb();

   $family_members = $db->prepare("SELECT * FROM w5_family_members");
   $family_members->execute();
   while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
   {
      $first_name = $fRow["first_name"];
      $last_name = $fRow["last_name"];
      $relationship_id = $fRow["relationship_id"];

      $relationships = $db->prepare("SELECT * FROM w5_family_members WHERE id = $relationship_id");
      while ($rRow = $relationships->fetch(PDO::FETCH_ASSOC))
      {
         $relationship = $rRow["description"];
      }
      echo "<p>$first_name $last_name is my $relationship ($relationship_id)</p>";
   }

?>
