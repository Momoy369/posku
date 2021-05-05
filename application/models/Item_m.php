<?php defined('BASEPATH') OR exit('No direct script acess allowed');

Class item_m extends CI_Model{

    //start datatables

    var $column_order = array(null, 'barcode', 'p_item.name', 'category_name', 'unit_name', 'price', 'stock'); //set column field database for datatable orderable

    var $column_search = array('barcode', 'p_item.name', 'price');//set column field database for datatable searchable

    var $order = array('item_id' => 'asc'); //default order

    private function _get_datatables_query(){
        $this->db->select('p_item.*, p_categories.name as category_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_categories', 'p_item.category_id = p_categories.category_id');
        $this->db->join('p_unit', 'p_item.unit_id = p_unit.unit_id');
        $i = 0;
        foreach($this->column_search as $item){ //loop for column
            if(@$_POST['seacrh']['value']){ //if datatable send POST for search

                if($i === 0){ //first loop
                    $this->db->group_start(); //open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else{
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end();
            }
            $i++;
        }

        if(isset($_POST['order'])){ // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);    
        } else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables(){
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_all(){
        $this->db->from('p_item');
        return $this->db->count_all_results();
    }

    //end datatables

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

    function update_stock_in($data){
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql ="UPDATE p_item SET stock = stock + '$qty' WHERE item_id = '$id'";
        $this->db->query($sql);
    }

}