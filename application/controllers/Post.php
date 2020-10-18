<?php

class Post extends CI_Controller {

  public function __construct(){
    parent::__construct();
    //ヘルパー
    $this->load->helper('url');

  }
  public function index() {
    $this->load->view('template/header');
  }
}
?>