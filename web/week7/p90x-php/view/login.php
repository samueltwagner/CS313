<?php
  if ($auth->isLogged()) {
    header('Location: index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/head.php';?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/header.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/messages.php'; ?>
    <main>
      <br><br>
      <form method="POST" action="?login">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>

      </br><span class="or">Or</span> </br></br>
      <a href="?page=register">
        <button class="btn btn-success">
          Register New User
        </button>
      </a>

    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>