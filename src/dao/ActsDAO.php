<?php

require_once( __DIR__ . '/DAO.php');

class ActsDAO extends DAO {

  public function search($genre = '', $dag = ''){
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id` WHERE 1";

    // if (!empty($name)) {
    //   $sql .= " AND `show_name` LIKE :name";
    // }

    if (!empty($genre)) {
      $sql .= " AND `shows`.`genre` LIKE :genre";
    }
    if (!empty($dag)) {
      $sql .= " AND `program`.`date` LIKE :dag";
    }

    $sql .= " ORDER BY `show_name` DESC";

    $stmt = $this->pdo->prepare($sql);
    // if (!empty($name)) {
    //   $stmt->bindValue(':name','%'.$name.'%');
    // }

    if (!empty($genre)) {
      $stmt->bindValue(':genre','%'.$genre.'%');
    }

    if (!empty($dag)) {
      $stmt->bindValue(':dag','%'.$dag.'%');
    }
    // if (!empty($nationality)) {
    //   $stmt->bindValue(':nationality', $nationality);
    // }
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $grouped = array();
    foreach($results as $result){
      $tijden = array();
      if(!isset($grouped[$result['showid']])) {
        $grouped[$result['showid']] = array();
      } else {
        $tijden = $grouped[$result['showid']]['tijden'];
      }
      $grouped[$result['showid']] = $result;

      array_push($tijden, array(
        "dag" => $result['dag'],
        "hour" => $result['hour']
      ));
      $grouped[$result['showid']]['tijden'] = $tijden;
    }
    return $grouped;
  }

  public function selectById($id){
    $sql = "SELECT * FROM `shows` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllCategories() {
    $sql = "SELECT DISTINCT `g` FROM `shows`";
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
