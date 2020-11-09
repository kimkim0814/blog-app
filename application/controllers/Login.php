<?php

class Login extends CI_Controller
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
        $this->load->model('user_model');
    }
    public function index()
	{
		$this->login();
	}

	public function login()
	{

		$this->load->view('template/header' );
		$this->load->view('login/index');

    }
    
    public function logout(){
        $this->session->session_destroy();
        redirect("login/index");
    }

    public function signup(){
        $this->load->view('login/signup');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules("email", "メール", "required|trim|callback_validate_credentials");
        $this->form_validation->set_rules("password", "パスワード", "required|md5|trim");

        if ($this->form_validation->run()) {
            $data = array(
            "email" => $this->input->post("email"),
            "is_logged_in" => 1
          );
            $this->session->set_userdata($data);

            redirect("blog/index");
        } else {
            echo "<script>alert('正しいメールアドレスとパスワードを入力してください')</script>";
            $this->load->view('template/header');
            $this->load->view("login/index");
        }
    }

    public function validate_credentials()
    {		//Email情報がPOSTされたときに呼び出されるコールバック機能
        $this->load->model("user_model");

        if ($this->user_model->can_log_in()) {	//ユーザーがログインできたあとに実行する処理
            return true;
        } else {					//ユーザーがログインできなかったときに実行する処理
            $this->form_validation->set_message("validate_credentials", "ユーザー名かパスワードが異なります。");
            return false;
        }
    }

}
