<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET['personId'];
            // execute query to pull up data from that id
            $statement = $db->prepare('SELECT * FROM w6_user WHERE ID = :personId');
            $statement->bindvalue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               $fstatement = $db->prepare('SELECT food FROM w6_food WHERE ID = $food_id');
               $fstatement->execute();
               while ($frow = $fstatement->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $frow['food'];
               }
            }
            echo "<h1>$first $last's favorite food is $ffood</h1>";
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>
