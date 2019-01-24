<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';

class ActsController extends Controller {


  function __construct() {
    // $this->playerDAO = new PlayerDAO();
  }

  public function index() {

    $this->set('title', 'home');

    }
    // if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

    //   header('Content-Type: application/json');
    //   echo json_encode($players);
    //   exit();
    // }
    public function agenda() {
    }

    public function detail() {
    }
  }

