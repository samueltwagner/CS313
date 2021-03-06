<!-- Top of dbConnect.php-->
<h1>Top of dbConnect.php<h1>
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
  echo "<h1>dbConnect.php echo statement</h1>";
  echo "<h1>Will this php variable show up:" .  $dbPort . "</h1>";
  echo "<h3>My goal was to display workouts and the exercises within the workouts from the database.</h3>";

  $workoutDetails = $db->prepare("SELECT workout_title FROM p90x_workout_details");
  $workoutDetails->execute();
  while ($wRow = $workoutDetails->fetch(PDO::FETCH_ASSOC))
  {
    print_r($workoutDetails);
     $workout_title = $wRow["workout_title"];
     $exercise_id = $wRow["exercise_id"];
     $exercises = $db->prepare("SELECT * FROM p90x_exercises WHERE id = $exercise_id");
     $exercises->execute();
     while ($wRow = $exercises->fetch(PDO::FETCH_ASSOC))
     {
        $exercise_title = $wRow["exercise_title"];
     }
     echo "<h1>Your workout today is" . $workout_title . "</h1>";
     echo "<h1>Exercise is " . $exercise_title ($exercise_id) . "</h1>";
  }
?>
<h1>Bottom of dbConnect.php<h1>
