<?php

class Database {
  private $connection;

  public function __construct($host, $port, $dbname, $username, $password) {
    $this->connection = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);

    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    return $this;
  }

  public function getConnection() {
    return $this->connection;
  }
}

?>