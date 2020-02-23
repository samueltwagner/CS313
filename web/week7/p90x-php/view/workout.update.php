<?php 
  if (!$auth->isLogged()) {
    header('Location: ?page=login');
  }
  $workId = (String)trim($_GET['id']);
  $workout = $workouts->find($workId);
  if (!$workout) {
    $_SESSION['msg_error'] = 'Workout not found';
    header('Location: ?page=workouts');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/head.php';?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/nav.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/messages.php'; ?>
    <main>
      <div class="row">
        <div class="col-sm-12">
          <header>
            <div class="col-sm-12">
              <h3 style="float: left;">
                Update Workout
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
          <form method="post" action="?type=workout&action=update">
            <input type="hidden" name="id" value="<?=$workout['id']?>">
            <div class="col-sm-12">
              <div class="form-group" style="text-align: left">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" name="description" value="<?=$workout['description']?>" required>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group" style="text-align: left">
                <label for="categories">Category</label>
                <select class="form-control" id="categories" name="category">
                  <?php 
                    foreach($categories->getCategories() as $category) {
                      ?>
                        <option value="<?=$category['id']?>" <?=$category['id'] === $workout['id_category'] ? "selected" : ""?>><?=$category['name']?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group" style="text-align: left">
                <label for="amount">Amount</label>
                <input type="number" min="0" class="form-control" id="amount" name="amount" value="<?=$workout['amount']?>" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/p90x-php/modules/footer.php';?>

</body>
</html>