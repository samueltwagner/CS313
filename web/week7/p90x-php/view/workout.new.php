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
      <div class="row">
        <div class="col-sm-12">
          <header>
            <div class="col-sm-12">
              <h3 style="float: left;">
                New Workout
              </h3>
              <a href="?page=workout" class="btn btn-primary" style="float: right; color: white;">
                Back
              </a>
            </div>
          </header>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <br>
          <form method="post" action="?type=workout&action=create">
          <div class="col-sm-12">
              <div class="form-group" style="text-align: left">
                  <div>
                      <label for="workout_name">Workout Name:</label>
                      <input type="text" class="form-control" id="desc" name="workout_name" required>
                  </div>
                  <br>
                <div class="row">
                    <div class="col">
                      <label for="exercise_name">Exercise: </label>
                      <input type="text" class="form-control" id="desc" name="exercise_name" required>  
                    </div>
                    <div class="col">
                      <label for="reps">Reps: </label>
                      <input type="text" class="form-control" id="desc" name="reps" required> 
                    </div>
                    <div class="col">
                      <label for="pounds">Pounds: </label>
                      <input type="text" class="form-control" id="desc" name="pounds" required> 
                    </div>
                </div>
                 </div>
               <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>