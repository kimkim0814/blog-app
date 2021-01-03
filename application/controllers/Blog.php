<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //ヘルパー
        $this->load->helper('url');
        $this->load->helper('form');

        //ライブラリー
        $this->load->library('form_validation');
        $this->load->library('session');

        //モデル
        $this->load->model('blog_model');
    }

    public function index()
    {
        $data['hoge'] = $this->session->userdata('hoge');
        $data['blog'] = $this->blog_model->get_blog();

        if ($this->session->userdata("is_logged_in")) {
            //ログインしている場合の処理
            $data['header'] = $this->load->view('templates/header', null, true);
            $data['navigation'] = $this->load->view('templates/navigation', null, true);
            $data['footer'] = $this->load->view('templates/footer', null, true);

            $this->load->view('blog/index', $data);
        } else {
            //ログインしていない場合の処理
            redirect("user/index");
        }
    }

    public function view($id = null)
    {
        $data['blog_item'] = $this->blog_model->get_blog($id);

        $data['header'] = $this->load->view('templates/header', $data, true);
        $data['navigation'] = $this->load->view('templates/navigation', $data, true);
        $data['footer'] = $this->load->view('templates/footer', $data, true);
        $this->load->view('blog/view', $data);
    }

    public function search()
    {
        $params = $this->input->get();
        
        $data['result'] = $this->blog_model->search($params);
        echo implode($data['result']);
    }


    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');


        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('templates/navigation');

            $this->load->view('blog/create');
        } else {
            $this->blog_model->set_blog();
            echo '<script type="text/javascript">alert("投稿が完了しました");</script>';
            echo '<script>location.href= "/blog-app"; </script>';
        }
    }
}
