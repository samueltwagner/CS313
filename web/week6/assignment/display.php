<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['personId'];
            $statement = $db->prepare('SELECT * FROM w6_user WHERE Id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['id'];
               $first   = $row['first_name'];
               $last    = $row['last_name'];
               $workout = $row['workout'];

               $workouts = $db->prepare("SELECT workout FROM workout WHERE ID = $workout");
               $workouts->execute();
               while ($fRow = $workouts->fetch(PDO::FETCH_ASSOC))
               {
                  $workout = $fRow['workout'];
               }
               echo "<h1>$first $last's favorite food is $workout</h1>";
            }
         ?>

		</div>
	</body>
</html>