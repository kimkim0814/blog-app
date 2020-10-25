<?php

class Post extends CI_Controller {

  public function __construct(){
    parent::__construct();
    //ヘルパー
    $this->load->helper('url');
    $this->load->helper('form');
    //ライブラリー
    $this->load->library('form_validation');
    //モデル
    $this->load->model('post_model');

  }
  public function index() {
    $this->load->view('template/header');
    $data['post'] = $this->post_model->get_news();
  }
  public function view(){
    $data['post_item'] = $this->post_model->get_news($slug);
}
}
?>