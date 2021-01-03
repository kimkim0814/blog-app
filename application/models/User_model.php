<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function can_log_in()
    {
        $this->db->where("email", $this->input->post("email"));
        $this->db->where("password", md5($this->input->post("password")));
        $query = $this->db->get("user");

        //１行マッチしたら
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function add_users(){
        $this->load->helper('url');

        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            "password"=>md5($this->input->post("password"))
        ];

        return $this->db->insert('user',$data);
      }
}
