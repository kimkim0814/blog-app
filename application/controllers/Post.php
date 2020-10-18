<?php

class Post extends CI_Controller {

  public function __construct(){
    $this->load->helper("url_helper");

  }
  public function index() {
    $this->load->view('template/header');
  }
}
?>