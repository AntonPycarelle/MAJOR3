<?php

require_once( __DIR__ . '/DAO.php');

class ActsDAO extends DAO {

  public function search($genre = '', $dag = '', $name = '', $loca = ''){
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour, program.location_id, locations.location_name
    FROM `shows`
    INNER JOIN `program`
    ON `shows`.`id` = `program`.`show_id`
    INNER JOIN `locations`
    ON `program`.`location_id` = `locations`.`id`
    WHERE 1";

    // if (!empty($name)) {
    //   $sql .= " AND `show_name` LIKE :name";
    // }

    if (!empty($genre)) {
      $sql .= " AND `shows`.`genre` LIKE :genre";
    }
    if (!empty($dag)) {
      $sql .= " AND `program`.`date` LIKE :dag";
    }
    if (!empty($name)) {
      $sql .= " AND `shows`.`show_name` LIKE :name";
    }
    if (!empty($loca)) {
      $sql .= " AND `locations`.`location_name` LIKE :loca";
    }

    $sql .= " ORDER BY `show_name` DESC";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($genre)) {
      $stmt->bindValue(':genre','%'.$genre.'%');
    }
    if (!empty($dag)) {
      $stmt->bindValue(':dag','%'.$dag.'%');
    }
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }
    if (!empty($loca)) {
      $stmt->bindValue(':loca','%'.$loca.'%');
    }
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
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour, program.location_id, artists.site, locations.location_name
    FROM `shows`
    INNER JOIN `program`
    ON `shows`.`id` = `program`.`show_id`
    INNER JOIN `locations`
    ON `program`.`location_id` = `locations`.`id`
    INNER JOIN `artists`
    ON `shows`.`artist_id` = `artists`.`id`
    WHERE shows.id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByDay($dagg){
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour, program.location_id, locations.location_name
    FROM `shows`
    INNER JOIN `program`
    ON `shows`.`id` = `program`.`show_id`
    INNER JOIN `locations`
    ON `program`.`location_id` = `locations`.`id`
    WHERE `program`.`date` =  :dagg
    ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':dagg', $dagg);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

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

  public function selectAllLocations() {
    $sql = "SELECT DISTINCT `location_name` FROM `locations`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectUitgelicht($limit) {
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour, program.location_id, locations.location_name
    FROM `shows`
    INNER JOIN `program`
    ON `shows`.`id` = `program`.`show_id`
    INNER JOIN `locations`
    ON `program`.`location_id` = `locations`.`id`
    ORDER BY RAND() LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);

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
