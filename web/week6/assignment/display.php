<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['id'];
            $statement = $db->prepare('SELECT * FROM athlete WHERE Id = :id');
            $statement->bindValue(':id', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['id'];
               $first   = $row['first_name'];
               $last    = $row['last_name'];
               $workout_id = $row['workout_favorite'];

               $workouts = $db->prepare("SELECT workout_name FROM workout WHERE ID = $workout_id");
               $workouts->execute();
               while ($fRow = $workouts->fetch(PDO::FETCH_ASSOC))
               {
                  $workout = $fRow['workout'];
               }
               echo "<h1>$first $last's favorite workout is $workout</h1>";
            }
         ?>

		</div>
	</body>
</html>