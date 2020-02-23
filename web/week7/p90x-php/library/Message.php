<?php

class Message {
  private $INFO_MESSAGE = null;
  private $ERROR_MESSAGE = null;

  public function __construct() {
    return $this;
  }

  public function setError($message) {
    $this->ERROR_MESSAGE = $message;
    return $this;
  }

  public function setInfo($message) {
    $this->INFO_MESSAGE = $message;
    return $this;
  }

  public function hasError() {
    return $this->ERROR_MESSAGE != null;
  }

  public function hasInfo() {
    return $this->INFO_MESSAGE != null;
  }

  public function getError() {
    return $this->ERROR_MESSAGE;
  }

  public function getInfo() {
    return $this->INFO_MESSAGE;
  }
}

?>