<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
         $personId = $_GET['personId'];
         $statement = $db->prepare('SELECT * FROM w6_user WHERE ID = :personId');
         $statement->bindValue(':personId', $personId);
         $statement->execute();
         while ($row = $statment->fetch(PDO::FETCH_ASSOC))
         {

            $id = $row['id'];
            $first = $row['first'];
            $last = $row['last'];
            $food_id = $row['food_type'];

            $foods = $db->prepare('SELECT food FROM w6_food WHERE ID = $food_Id');
            $foods->execute();

            while ($row = $foods->fetch(PDO::FETCH_ASSOC))
            {
               $food = $fRow['food'];
            }

            echo "<h1>$first $last's favorite food is $food</h1>";
         }
         ?>

		</div>
	</body>
</html>