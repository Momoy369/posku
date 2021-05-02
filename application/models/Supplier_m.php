<?php defined('BASEPATH') OR exit('No direct script acess allowed');

Class Supplier_m extends CI_Model{

    public function get($id = null){
        $this->db->from('supplier');
        if($id != null){
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $param = [
            'name' => $post['supplier_name'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'description' => empty($post['desc']) ? null : $post['desc'],
        ];
        $this->db->insert('supplier', $param);
    }

    public function edit($post){
        $param = [
            'name' => $post['supplier_name'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'description' => empty($post['desc']) ? null : $post['desc'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('supplier', $param);
    }

    public function del($id){
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}