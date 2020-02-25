<?php 
  if (!$auth->isLogged()) {
    header('Location: ?page=login');
  }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/head.php';?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/nav.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/messages.php'; ?>
    <main>
      <header>
        <div class="col-sm-12">
          <h3 style="float: left;">
            Workouts
          </h3>
          <a href="?page=new-workout" class="btn btn-primary" style="float: right; color: white;">
            New Workout
          </a>
        </div>
      </header>
      
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Workout Name</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($workouts->getWorkouts() as $workout) {
              ?>
              <tr>
                <th scope="row">1</th>
                <td><?=$workout['workout_name']?></td>
                <td><?php
                  $workoutName = $workouts->find($workout['id']);
                  if ($workoutName != false) {
                    echo $workoutName['name'];
                  } else {
                    echo "Unknown";
                  }
                ?></td>
                <td><?=$workout['id']?></td>
                <td>
                  <a href="?page=update-workout&id=<?=$workout['id']?>">
                    <button class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Update workout">
                      <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </button>
                  </a>
                  <a href="?type=workout&action=delete&id=<?=$workout['id']?>" onclick="return confirm('You really sure want delete this workout?');">
                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Delete workout">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                  </a>
                </td>
              </tr> 
              <?php
            }
          ?>
        </tbody>
      </table>
    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>