<?php

try {
  
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $DATABASE['hostname'] = $dbOpts["host"];
  $DATABASE['port'] = $dbOpts["port"];
  $DATABASE['username'] = $dbOpts["user"];
  $DATABASE['password'] = $dbOpts["pass"];
  $DATABASE['dbname'] = ltrim($dbOpts["path"],'/');

}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>