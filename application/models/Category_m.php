<?php defined('BASEPATH') OR exit('No direct script acess allowed');

Class category_m extends CI_Model{

    public function get($id = null){
        $this->db->from('p_categories');
        if($id != null){
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $param = [
            'name' => $post['categories_name'],
            
        ];
        $this->db->insert('p_categories', $param);
    }

    public function edit($post){
        $param = [
            'name' => $post['categories_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('category_id', $post['id']);
        $this->db->update('p_categories', $param);
    }

    public function del($id){
        $this->db->where('category_id', $id);
        $this->db->delete('p_categories');
    }
}