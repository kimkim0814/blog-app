<?php

class Login extends CI_Controller {
  public function __construct(){
    parent::__construct();
    //ヘルパー
    $this->load->helper('url');
    $this->load->helper('form');
    //ライブラリー
    $this->load->library('form_validation');
    //モデル
    $this->load->model('user_model');

  }
  public function index(){
    $this->load->view('template/header');
    $this->load->view('login/index');
  }
}

?>