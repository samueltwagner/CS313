<?php

require_once(__DIR__ . '/Database.class.php');
require_once(__DIR__ . '/Auth.class.php');
require_once(__DIR__ . '/Workout.class.php');
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Message.php');

$message = new Message;
$database = new Database($DATABASE['hostname'], $DATABASE['port'], $DATABASE['dbname'], $DATABASE['username'], $DATABASE['password'], $message);
$auth = new Auth($database->getConnection());
$categories = new Categories($database->getConnection(), $auth);
$workouts = new Workout($database->getConnection(), $auth);

$auth->checkout();

function isValid($string) {
  return isset($string) && !empty($string);
}

include_once __DIR__ . "/actions.login.php";
include_once __DIR__ . "/actions.register.php";
include_once __DIR__ . "/actions.workouts.php";
include_once __DIR__ . "/actions.messages.php";