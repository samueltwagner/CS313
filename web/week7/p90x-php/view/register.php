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
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/messages.php'; ?>
    <main>
      <header class="header-register">
        <h2>
          Register
        </h2>
      </header>
      <form method="POST" action="?register">
        <div class="col-sm-12">
          <div class="form-row">
            <div class="col-sm-12">
              <div class="col-sm-12 mb-2">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="first_name" id="firstName" required>
              </div>
              <div class="col-sm-12 mb-2">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="last_name" id="lastName" required>
              </div>
              <div class="col-sm-12 mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="email" required>
              </div>
              <div class="col-sm-12 mb-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="col-sm-12 mb-4">
                <label for="cpassword">Confirm password</label>
                <input type="password" class="form-control" id="cpassword" name="password_confirmation" required>
              </div>
              <div class="col-sm-12">
                <a href="?page=login" style="float: left;" class="btn btn-success">
                  Login
                </a>
                <button type="submit" class="btn btn-primary" style="float: right">Register</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      
    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>