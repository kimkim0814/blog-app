<?php

class Blog extends CI_Controller {

  public function __construct(){
    parent::__construct();
    //ヘルパー
    $this->load->helper('url');
    $this->load->helper('form');
    //ライブラリー
    $this->load->library('form_validation');
    //モデル
    $this->load->model('blog_model');

  }
  public function index() {
   
    $data['blog'] = $this->blog_model->get_blog();
    $this->load->view('template/header');
    $this->load->view('blog/index',$data);
  }

  public function view($id = NULL){
    $data['blog_item'] = $this->blog_model->get_blog($id);
    $this->load->view('template/header');
    $this->load->view('blog/view',$data);
}


  public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');

    if($this->form_validation->run() === FALSE ){
      $this->load->view('template/header');
      $this->load->view('blog/create');
    }else{
      $this->blog_model->set_blog();
      echo '<script type="text/javascript">alert("投稿が完了しました");</script>';
    }
  }
}
?>