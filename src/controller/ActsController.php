<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActsDAO.php';

class ActsController extends Controller {


  function __construct() {
    $this->actsDAO = new ActsDAO();
  }

  public function index() {


    }



    // if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

    //   header('Content-Type: application/json');
    //   echo json_encode($players);
    //   exit();
    // }
    public function agenda() {
      // $this->set('shows', $this->actsDAO->selectAll());
      $actsDAO = new ActsDAO();
      if (!empty($_GET['page']) && $_GET['page'] == 'agenda') {
        $genre = null;
        if(isset($_GET['genre'])){
          $genre = $_GET['genre'];
        }
        $dag = null;
        if(isset($_GET['dag'])){
          $dag = $_GET['dag'];
        }
        $name = null;
        if(isset($_GET['search'])){
          $name = $_GET['search'];
        }
        $loca = null;
        if(isset($_GET['locatie'])){
          $loca = $_GET['locatie'];
        }
        $shows = $this->actsDAO->search($genre, $dag, $name, $loca);

        // $this->set('nationality',$_GET['nationality']);
      }else{
        $shows = $this->actsDAO->search();
        $this->set('name','');
      }
      // $programmas = $playerDAO->test();
      $this->set('shows', $shows);
      $this->set('title', "agenda");


      $this->set('locations', $this->actsDAO->selectAllLocations());

      // $acts = $this->actDAO->search(25, $_GET['name']);
    }

    public function detail() {
      $details = $this->actsDAO->selectById($_GET['id']);
      $this->set('details', $details);

    }
  }

