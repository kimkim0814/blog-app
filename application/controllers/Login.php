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
  public function login_validation(){

    $this->form_validation->set_rules("email","メール","required|trim");
    $this->form_validation->set_rules("password", "パスワード", "required|md5|trim");

    if($this->form_validation->run()){
      redirect("blog/index");
    }else{
      $this->load->view("login");
    }
  }


}
?>