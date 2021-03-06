<?php 

class Workout {
  private $connection;
  private $auth;

  public function __construct($connection, $auth) {
    $this->connection = $connection;
    $this->auth = $auth;
  }

  //READ
  public function getWorkouts() {
    $userId = $this->auth->getUser()->getId();
    $preparedStatment = $this->connection->prepare('SELECT * FROM workouts WHERE user_id = :userId;');
    $preparedStatment->bindParam(':userId', $userId, PDO::PARAM_INT);
    $preparedStatment->execute();
    $rows = $preparedStatment->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  //???
  public function find() {
    $userId = $this->auth->getUser()->getId();
    $preparedStatment = $this->connection->prepare('SELECt * FROM workouts WHERE id = :id AND user_id = :userId LIMIT 1;');
    $preparedStatment->bindParam(":id", $categoryId, PDO::PARAM_INT);
    $preparedStatment->bindParam(":userId", $userId, PDO::PARAM_INT);
    $preparedStatment->execute();
    $result = $preparedStatment->fetch(PDO::FETCH_ASSOC);
    return $result ? $result : false;
  }

  //CREATE
  public function create($workout_name, $exercise_name, $reps, $pounds) {
    $userId = $this->auth->getUser()->getId();

    //UPDATE
    $preparedStatment = $this->connection->prepare('INSERT INTO workouts (workout_name, workout_day) VALUES (:workout_name, :workout_day)');
    $preparedStatment->bindParam(":workout_name", $workout_name, PDO::PARAM_STR);
    $preparedStatment->bindParam(":workout_day", $workout_day, PDO::PARAM_INT);

    
    // try{
    //   $this->connection->beginTransaction();
    //   $preparedStatment->execute();
    //   $this->connection->commit();
    //   return true;
    // } catch(PDOExcetion $e) {
    //   $this->connection->rollback();
    // }
  }

  // public function update($id, $amount, $description, $categoryId) {
  //   $userId = $this->auth->getUser()->getId();

  //   //CHANGE
  //   $preparedStatment = $this->connection->prepare('UPDATE workouts SET amount=:amount, description=:description, id_category=:category WHERE id=:id AND user_id=:userId');
  //   $preparedStatment->bindParam(":id", $id, PDO::PARAM_INT);
  //   $preparedStatment->bindParam(":userId", $userId, PDO::PARAM_INT);
  //   $preparedStatment->bindParam(":amount", $amount, PDO::PARAM_INT);
  //   $preparedStatment->bindParam(":description", $description, PDO::PARAM_STR);
  //   $preparedStatment->bindParam(":category", $categoryId, PDO::PARAM_INT);
  //   try{
  //     $this->connection->beginTransaction();
  //     $preparedStatment->execute();
  //     $this->connection->commit();
  //     return true;
  //   } catch(PDOExcetion $e) {
  //     $this->connection->rollback();
  //   }
  // }

  // public function delete($id) {
  //   $userId = $this->auth->getUser()->getId();

  //   $preparedStatment = $this->connection->prepare('DELETE FROM workouts WHERE id=:id AND user_id = :userId');
  //   $preparedStatment->bindParam(":userId", $userId, PDO::PARAM_INT);
  //   $preparedStatment->bindParam(":id", $id, PDO::PARAM_INT);
  //   try{
  //     $this->connection->beginTransaction();
  //     $preparedStatment->execute();
  //     $this->connection->commit();
  //     return true;
  //   } catch(PDOExcetion $e) {
  //     $this->connection->rollback();
  //   }
  //   return $this;
  // }
}