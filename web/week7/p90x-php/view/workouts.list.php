<?php 
  if (!$auth->isLogged()) {
    header('Location: ?page=login');
  }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/head.php';?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/nav.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/messages.php'; ?>
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
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Amount</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($workouts->getWorkouts() as $workout) {
              ?>
              <tr>
                <th scope="row">1</th>
                <td><?=$workout['description']?></td>
                <td><?php
                  $workoutCategory = $categories->find($workout['id_category']);
                  if ($workoutCategory != false) {
                    echo $workoutCategory['name'];
                  } else {
                    echo "Unknow";
                  }
                ?></td>
                <td><?=$workout['amount']?></td>
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

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/footer.php';?>

</body>
</html>