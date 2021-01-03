<?php

class Blog_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 記事の取得
     *
     * @param boolean $id
     * @return void
     */
    // TODO: 型が異なるので統一する
    public function get_blog($id = false)
    {
        if ($id === false) {
            $query = $this->db->get('blog');
            return $query->result_array();
        }

        $query = $this->db->get_where('blog', array('id' => $id));
        return $query->row_array();
    }

    /**
     * 記事の検索
     *
     * @param array $params
     * @return void
     */
    public function search($params = [])
    {
        $this->db->select('blog.*');
        $this->db->from('blog');
        $this->db->where('title', $params['title']);

        $query = $this->db->get();
        return $query->row_array();
    }

    /**
     * 記事の登録
     *
     * @return void
     */
    public function set_blog()
    {
        $this->load->helper('url');

        // TODO: POSTされたデータは直接modelで触らない方がいい
        $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        ];

        $this->db->insert('blog', $data);

        return true;
    }
}
