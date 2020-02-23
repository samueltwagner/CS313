<?php
//login
$isLoginPost = isset($_GET['login']);

//login trim
//Need to Sanitize
if ($isLoginPost) {
  $email = (String)@trim($_POST['email']);
  $password = (String)@trim($_POST['password']);

  if (isValid($email) && isValid($password)) {
    $response = $auth->login($email, $password);
    if ($response != false) {
      header('Location: index.php');
    } else {
      header('Location: ?page=login');
    }
    exit;
  }
}

//logout
$isLogoutRoute = isset($_GET['logout']);
if($isLogoutRoute) {
  $auth->logout();
  header('Location: ?page=login');
  exit;
}
?>