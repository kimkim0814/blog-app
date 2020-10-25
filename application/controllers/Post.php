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
    $data['post'] = $this->post_model->get_post();
  }
  public function view(){
    $data['post_item'] = $this->post_model->get_post($slug);
}
  public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if($this->form_validation->run() === FALSE ){
      $this->load->view('template/header');
    }else{
      $this->post_model->set_post();
      echo '<script type="text/javascript">alert("投稿が完了しました");</script>';
    }
  }
}
?>