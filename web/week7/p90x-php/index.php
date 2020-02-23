<?php
require_once(__DIR__ . '/library/main.php');

$action = (String)@trim($_GET['page']);

switch ($action) {
  //workouts
  case 'workouts':
    include_once '/view/workouts.list.php';
    break;
  //new-workout
  case 'new-workout':
    include_once '/view/workout.new.php';
    break;
  //update-workout
  case 'update-workout':
    include_once '/view/workout.update.php';
    break;


//unsure
//   case 'categories':
//     include_once 'view/categories.list.php';
//     break;
//   case 'new-category':
//     include_once 'view/categories.new.php';
//     break;
//   case 'update-category':
//     include_once 'view/categories.update.php';
//     break;


  //login register 
  case 'error':
    include_once '/view/404.php';
    break;
  case 'login':
    include_once '/view/login.php';
    break;
  case 'register':
    include_once '/view/register.php';
    break;
  default;
    include_once '/view/home.php';
    break;
}
