<?php
   require "dbConnect.php";
   $db = get_db();
   $workoutDetails = $db->prepare("SELECT * FROM p90x_workout_details");
   $workoutDetails->execute();
   while ($wRow = $workoutDetails->fetch(PDO::FETCH_ASSOC))
   {
      $workout_title = $wRow["workout_title"];
      $exercise_id = $wRow["exercise_id"];
      $exercises = $db->prepare("SELECT exercise_title FROM p90x_exercises WHERE id = $exercise_id");
      $exercises->execute();
      while ($wRow = $exercises->fetch(PDO::FETCH_ASSOC))
      {
         $exercise_title = $wRow["exercise_title"];
      }
      echo "<h1>Your workout today is $workout_title.</h1>";
      echo "<h2>Exercise is $exercise_title ($exercise_id)</h2>";
   }
   echo "<h1>Where the magic happens</h1>"
?>

