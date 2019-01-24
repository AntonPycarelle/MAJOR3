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


      // $acts = $this->actDAO->search(25, $_GET['name']);
    }

    public function detail() {
    }
  }

