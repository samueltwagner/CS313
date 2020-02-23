<?php
// Register 
$isRegisterPost = isset($_GET['register']);
//Trim
if ($isRegisterPost) {
  $firstName = (String)@trim($_POST['first_name']);
  $lastName = (String)@trim($_POST['last_name']);
  $email = (String)@trim($_POST['email']);
  $password = (String)@trim($_POST['password']);
  $cPassword = (String)@trim($_POST['password_confirmation']);

  if (
    isValid($firstName) &&
    isValid($lastName) && 
    isValid($email) &&
    isValid($password) &&
    isValid($cPassword)
  ) {
    if ($password !== $cPassword) {
      $_SESSION['msg_error'] = 'Passwords not match';
      header('Location: ?page=register');
      exit;
    }
    $registered = $auth->register($firstName, $lastName, $email, $password);
    if ($registered == false) {
      $_SESSION['msg_error'] = 'An unknow error occurred';
      header('Location: ?page=register');
      exit;
    }
    $_SESSION['msg_info'] = 'User registered with success';
    header('Location: ?page=login');
    exit;
  }
}
