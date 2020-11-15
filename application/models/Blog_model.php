<?php
class Blog_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //blogデータの取得
    public function get_blog($id = false)
    {
        if ($id === false) {
            $query = $this->db->get('blog');
            return $query->result_array();
        }
        $query = $this->db->get_where('blog', array('id' => $id));
        return $query->row_array();
    }

    public function search($params = [])
    {
        $this->db->select('blog.*');
        $this->db->from('blog');
        $this->db->where('title', $params['title']);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function set_blog()
    {
        $this->load->helper('url');

        $data= array(
                        // 'hoge' => isset($_POST['something']) これと同じ意味?
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description')

                );
        return $this->db->insert('blog', $data);
    }
}
