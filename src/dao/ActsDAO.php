<?php

require_once( __DIR__ . '/DAO.php');

class ActsDAO extends DAO {

  public function search($max=10, $name = ''){
    $sql = "SELECT * FROM `shows` WHERE `Name` LIKE :name ORDER BY `Overall` DESC LIMIT :max";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':name','%'.$name.'%');
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `shows` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllCategories() {
    $sql = "SELECT DISTINCT `genre` FROM `shows`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAll() {
    $sql = "SELECT * FROM `shows` INNER JOIN `program` on `shows`.`id` = `program`.`show_id` INNER JOIN `locations` ON`locations`.`id` = `program`.`location_id`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
