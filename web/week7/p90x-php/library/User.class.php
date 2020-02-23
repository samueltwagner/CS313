<?php

class User {
  private $USER;

  public function __construct($userObj) {
    $this->USER = $userObj;
  }

  public function getId() {
    return $this->USER['id'];
  }

  public function getFirstName() {
    return $this->USER['first_name'];
  }

  public function getLastName() {
    return $this->USER['last_name'];
  }

  public function getFullName() {
    return $this->getFirstName() . " " . $this->getLastName();
  }

}

?>