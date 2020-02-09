<!-- heroku config -s -->
<?php

function get_db(){
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
}
  echo "<h1>Database is Connected!</h1>";
  echo "<h1>this php statement is working!</h1>";
  echo "<h1>Where the magic happens</h1>";

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
  echo "<h1>Where the magic happens</h1>"
?>
