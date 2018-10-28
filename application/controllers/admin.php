<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
	}

	public function about()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลเกี่ยวกับเรา';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลเกี่ยวกับเรา'
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				#$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			#$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function category()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลหมวดหมู่สินค้า';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลหมวดหมู่สินค้า'
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				#$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			#$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function brand()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลยี่ห้อสินค้า';
		$join_table = 'category';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$category = $this->db->get($join_table)->result_array();

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลยี่ห้อสินค้า',
				'category' => $category
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{
			$data['category'] = $this->db->get($join_table)->result_array();
			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function generation()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลรุ่นสินค้า';
		$join_table = 'brand';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$brand = $this->db->get($join_table)->result_array();

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลรุ่นสินค้า',
				'brand' => $brand
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			$data['brand'] = $this->db->get($join_table)->result_array();
			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function product()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลสินค้า';
		$join_table = 'generation';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$generation = $this->db->get('generation')->result_array();

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลสินค้า',
				'generation' => $generation
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function services()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลบริการ';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลบริการ'
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function member()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลสมาชิก';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลสมาชิก'
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}

	public function contactus()
	{
		$table = $this->uri->segment(2);
		$data['title_name'] = 'ข้อมูลติดต่อเรา';

		if(!empty($this->uri->segment(3))){

			$manage = $this->uri->segment(3);

			$data = array(
				'manage' => $manage,
				'title_name' => 'ข้อมูลติดต่อเรา'
			);

			if($manage == 'add') {
				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);


			}elseif ($manage == 'edit') {
				$this->db->where('id', $this->uri->segment(4));
				$data[''.$table.'_list'] = $this->db->get($table)->result_array();

				$this->load->view('admin/header');
				$this->load->view('admin/'.$table.'_manage', $data);



			}elseif($manage == 'delete'){
				$this->db->where('id', $this->uri->segment(4));
				$this->db->delete($table);
				redirect('admin/'.$table.'');
			}else{
				$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/'.$table.'');
			}

		}else{

			$data[''.$table.'_list'] = $this->admin_manage_model->select($table);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/'.$table.'');

		}
	}


}
