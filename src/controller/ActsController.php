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
      $this->set('shows', $this->actsDAO->selectAll());
      $actsDAO = new ActsDAO();
      if (!empty($_GET['page']) && $_GET['page'] == 'agenda') {
        $genre = $_GET['genre'];
        $shows = $this->actsDAO->search($genre);

        // $this->set('nationality',$_GET['nationality']);
      }else{
        $shows = $this->actsDAO->search();
        $this->set('name','');
      }
      // $programmas = $playerDAO->test();
      $this->set('shows', $shows);
      $this->set('title', "Programma");


      // $acts = $this->actDAO->search(25, $_GET['name']);
    }

    public function detail() {
    }
  }

