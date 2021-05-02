<?php defined('BASEPATH') OR exit('No direct script acess allowed');

Class customer_m extends CI_Model{

    public function get($id = null){
        $this->db->from('customer');
        if($id != null){
            $this->db->where('customer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $param = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            
        ];
        $this->db->insert('customer', $param);
    }

    public function edit($post){
        $param = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('customer_id', $post['id']);
        $this->db->update('customer', $param);
    }

    public function del($id){
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }
}