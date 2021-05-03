<?php defined('BASEPATH') OR exit('No direct script acess allowed');

Class item_m extends CI_Model{

    public function get($id = null){
        $this->db->select('p_item.*, p_categories.name as category_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_categories', 'p_categories.category_id = p_item.category_id');
        $this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
        if($id != null){
            $this->db->where('item_id', $id);
        }
        $this->db->order_by('barcode', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $param = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['categories'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'image' => $post['image'],
            
        ];
        $this->db->insert('p_item', $param);
    }

    public function edit($post){
        $param = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['categories'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if($post['image'] != null){
            $param['image'] = $post['image'];
        }
        $this->db->where('item_id', $post['id']);
        $this->db->update('p_item', $param);
    }

    function check_barcode($code, $id = null){
        $this->db->from('p_item');
        $this->db->where('barcode', $code);
        if($id != null){
            $this->db->where('item_id' != $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
        $this->db->where('item_id', $id);
        $this->db->delete('p_item');
    }
}