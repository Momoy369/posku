<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct(){
		parent:: __construct();
		check_not_login();
		$this->load->model('category_m');
	}

	public function index()
	{
		$data['row'] = $this->category_m->get();
		$this->template->load('template', 'product/categories/category_data', $data);
	}

	public function add(){
		$categories = new stdClass();
		$categories->category_id = null;
		$categories->name = null;
		$data = array(
			'page' => 'add',
			'row' => $categories
		);
		$this->template->load('template', 'product/categories/category_form', $data);
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->category_m->add($post);
		} else if(isset($_POST['edit'])){
			$this->category_m->edit($post);

		}

		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Data saved!');
		}
		redirect('categories');
	}

	public function edit($id){
		$query = $this->category_m->get($id);
		if($query->num_rows() > 0){
			$categories = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $categories
			);
			$this->template->load('template', 'product/categories/category_form', $data);
		} else{
			$this->session->set_flashdata('failed', 'Data not found!');
			redirect('categories');
		}
	}

	public function del($id){
		$this->category_m->del($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Data deleted!');

		}
		redirect('categories');
	}
}
