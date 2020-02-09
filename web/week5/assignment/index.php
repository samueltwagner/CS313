<!-- Top of index.php-->
<h3>Top of Index.php<h3>
<?php
   require "dbConnect.php";
   $db = get_db();
   $workoutDetails = $db->prepare("SELECT * FROM p90x_workout_details");
   $workoutDetails->execute();
   $wRow = $workoutDetails->fetch(PDO::FETCH_ASSOC);
   
   $workout_title = $wRow["workout_title"];
   $exercise_id = $wRow["exercise_id"];
   $exercises = $db->prepare("SELECT exercise_title FROM p90x_exercises WHERE id = $exercise_id");
   $exercises->execute();

   $wRow = $exercises->fetch(PDO::FETCH_ASSOC);
   $exercise_title = $wRow["exercise_title"];

   echo "<h3>Your workout today is" . $workout_title . "</h3>";
   echo "<h3>Exercise is " . $exercise_title ($exercise_id) . "</h3>";
   echo "<h3>Inside the first php statement.</h3>";
?>
<br>
<h3>Below the first php statement</h3>
<br>
<h3>Above the second php statment</h3>
<?php
      $statement = $db->prepare("SELECT * FROM p90x_workout_title");
      $statement->execute();
      // Go through each result
      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
      {
         $workout_title2 = $row['workout_title'];
         echo "<h3>This is the workout title" . $workout_title2 . "<h3>";
         echo "<h3>Inside the second php statement.</h3>";
      }
?>
<h3>Below the second php statment</h3>