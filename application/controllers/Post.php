<?php

class Post extends CI_Controller {

  public function __construct(){
    parent::__construct();
    //ヘルパー
    $this->load->helper('url');
    $this->load->helper('form');
    //ライブラリー
    $this->load->library('form_validation');

  }
  public function index() {
    $this->load->view('template/header');
  }
}
?>