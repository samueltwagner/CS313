<?php 

if (isset($_GET['type'])) {
  $type = (String)trim($_GET['type']);

  if ($type === 'workout') {

    $action = (String)trim($_GET['action']);
    if (isValid($action)) {
      switch($action) {
        case "delete":
          $id = (String)trim($_GET['id']);
          if (isValid($id)) {
            $workouts->delete($id);
            $_SESSION['msg_info'] = 'Workout was deleted with success';
          } else {
            $_SESSION['msg_error'] = 'Invalid id';
          }
          header('Location: ?page=workouts');
          exit;
          break;
        case "create":
          $workout_name = (String)trim($_POST['workout_name']);
          $exercise_name = (String)trim($_POST['exercise_name']);
          $reps = (String)trim($_POST['reps']);
          $pounds = (String)trim($_POST['pounds']);
          if (isValid($workout_name) && isValid($exercise_name) && isValid($reps) && isValid($pounds)) {
            $workouts->create($workout_name, $exercise_name, $reps, $pounds);
            $_SESSION['msg_info'] = 'Workout added with success';
            header('Location: ?page=workouts');
          } else {
            $_SESSION['msg_error'] = 'Invalid data';
            header('Location: ?page=new-workout');
          }
          exit;

          break;
        case "update":
          $workout_name = (String)trim($_POST['workout_name']);
          $exercise_name = (String)trim($_POST['exercise_name']);
          $reps = (String)trim($_POST['reps']);
          $pounds = (String)trim($_POST['pounds']);
          if (isValid($id) && isValid($categoryId) && isValid($amount) && isValid($description)) {
            $workouts->update($workout_name, $exercise_name, $reps, $pounds);
            $_SESSION['msg_info'] = 'Workout updated with success';
            header('Location: ?page=workouts');
          } else {
            $_SESSION['msg_error'] = 'Invalid data';
            header('Location: ?page=new-workout');
          }
          exit;
          break;
        default:
          break;
      }
    }
  }
}