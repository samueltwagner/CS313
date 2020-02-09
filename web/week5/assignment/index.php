<!-- Top of index.php-->
<h2>Top of Index.php<h2>
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

   echo "<h2>Your workout today is $workout_title.</h2>";
   echo "<h2>Exercise is $exercise_title ($exercise_id)</h2>";
   echo "<h2>Inside the first php statement.</h2>";
?>
<br>
<h2>Below the first php statement</h2>
<br>
<h2>Above the second php statment</h2>
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
<h2>Below the second php statment</h2>