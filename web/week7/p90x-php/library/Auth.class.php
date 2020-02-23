<?php

require_once(__DIR__ . "/User.class.php");
class Auth {
  private $connection;
  private $SESSION_NAME = 'cs313_user';
  private $USER;

  public function __construct($connection) {
    if(!isset($_SESSION)) {
      session_start();
    }
    $this->connection = $connection;
    return $this;
  }

  public function getUserId() {
    $user = $_SESSION[$this->SESSION_NAME];
    return $user;
  }

  public function isLogged() {
    return isset($_SESSION[$this->SESSION_NAME]) ? true : false;
  }

  public function logout() {
    unset($_SESSION[$this->SESSION_NAME]);
    return $this;
  }

  public function checkout() {
    if ($this->isLogged()) {
      $userId = $this->getUserId();
      $user = $this->findUser($userId);
      if ($user != false) {
        $this->USER = new User($user);
      } else {
        $this->logout();
        $_SESSION['msg_error'] = 'Invalid session';
        header('Location: ?page=home');
        exit;
      }
    }
    return $this;
  }

  public function getUser() {
    return $this->USER;
  }

  private function findUser($userId) {
    $preparedStatment = $this->connection->prepare('SELECt * FROM users WHERE id = :id LIMIT 1');
    $preparedStatment->bindParam(':id', $userId, PDO::PARAM_INT);
    $preparedStatment->execute();
    $response = $preparedStatment->fetch(PDO::FETCH_ASSOC);
    return $response ? $response : false;
  }

  public function login($email, $password) {
    $userId = $this->authCheck($email, $password);
    if ($userId != false) {
      $_SESSION[$this->SESSION_NAME] = $userId;
      $_SESSION['msg_info'] = 'User logged with success';
      return true;
    }
    $_SESSION['msg_error'] = 'Invalid username or password';
    return false;
  }

  private function authCheck($email, $password) {
    $row = $this->getRowByEmail($email);
    if (!$row) {
      return false;
    }
    $passwordsMatch = $this->verifyPassword($password, $row['password']);
    if (!$passwordsMatch) {
      return false;
    }
    return $row['id'];
  }

  public function register($firstName, $lastName, $email, $password) {
    $emailExists = $this->getRowByEmail($email);
    if ($emailExists) {
      $_SESSION['msg_error'] = 'Email already in use';
      header('Location: ?page=register');
      exit;
    }
    $hash = $this->hashPassword($password);
    $response = $this->insertUser($firstName, $lastName, $email, $hash);
    return $response;
  }

  private function insertUser($firstName, $lastName, $email, $hash) {
    $preparedStatment = $this->connection->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:firstName, :lastName, :email, :hash)');
    $preparedStatment->bindParam(':firstName', $firstName, PDO::PARAM_STR);
    $preparedStatment->bindParam(':lastName', $lastName, PDO::PARAM_STR);
    $preparedStatment->bindParam(':email', $email, PDO::PARAM_STR);
    $preparedStatment->bindParam(':hash', $hash, PDO::PARAM_STR);

    try{
      $this->connection->beginTransaction();
      $preparedStatment->execute();
      $this->connection->commit();
      return true;
    } catch(PDOExcetion $e) {
      $this->connection->rollback();
    }
    return false;
  }

  private function getRowByEmail($email) {
    $query = "%$email%";
    $preparedStatment = $this->connection->prepare('SELECT * FROM users WHERE email LIKE :email LIMIT 1');
    $preparedStatment->bindParam(":email", $query, PDO::PARAM_STR);
    $preparedStatment->execute();
    $response = $preparedStatment->fetch(PDO::FETCH_ASSOC);
    return $response;
  } 

  private function hashPassword($password) {
    $options = [
      'cost' => 12,
    ];
    return password_hash($password, PASSWORD_BCRYPT, $options);
  }

  private function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
  }
}