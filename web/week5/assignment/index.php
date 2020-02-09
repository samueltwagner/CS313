<!-- Top of index.php-->
<h1>Top of Index.php<h1>
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

   echo "<h1>Your workout today is $workout_title.</h1>";
   echo "<h2>Exercise is $exercise_title ($exercise_id)</h2>";
   echo "<h1>Inside the first php statement.</h1>";
?>
<br>
<h1>Below the first php statement</h1>
<br>
<h1>Above the second php statment</h1>
<?php
      $statement = $db->prepare("SELECT * FROM p90x_workout_title");
      $statement->execute();
      // Go through each result
      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
      {
         $workout_title2 = $row['workout_title'];
         echo "<p>This is the workout title $workout_title2<p>";
         echo "<h1>Inside the second php statement.</h1>";
      }
?>