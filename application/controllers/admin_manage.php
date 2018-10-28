<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_manage extends CI_Controller {

	public function Add()
	{
		$table = $this->input->post('table');

		if(!empty($_FILES['image'])){
			$file_path = pathinfo(@$_FILES["image"]["name"],PATHINFO_EXTENSION);
	      	$file_name = $table.date('YmdHis').'.'.$file_path;
	      	copy($_FILES["image"]["tmp_name"],"uploads/".$table."/".$file_name);

	      	$data[] = array(
	      		'code' => $this->input->post('code'),
	      		'generation_id' => $this->input->post('generation_id'),
	      		'name' => $this->input->post('name'),
	      		'price' => $this->input->post('price'),
	      		'color' => $this->input->post('color'),
	      		'detail' => $this->input->post('detail'),
	      		'image' => $file_name,
	      	);
		}else {
			$data[] = $this->input->post();
			unset($data[0]['id']);
			unset($data[0]['table']);
		}

		$this->admin_manage_model->Add($table, $data);
		redirect('admin/'.$table.'');
	}

	public function Edit()
	{
		$table = $this->input->post('table');
		$id = $this->input->post('id');

		if(!empty($_FILES['image']) && $_FILES['image']['name'] != ''){
			$file_path = pathinfo(@$_FILES["image"]["name"],PATHINFO_EXTENSION);
	      	$file_name = $table.date('YmdHis').'.'.$file_path;
	      	copy($_FILES["image"]["tmp_name"],"uploads/".$table."/".$file_name);

	      	$data[] = array(
	      		'code' => $this->input->post('code'),
	      		'generation_id' => $this->input->post('generation_id'),
	      		'name' => $this->input->post('name'),
	      		'price' => $this->input->post('price'),
	      		'color' => $this->input->post('color'),
	      		'detail' => $this->input->post('detail'),
	      		'image' => $file_name,
	      	);
		}else {
			$data[] = $this->input->post();
			unset($data[0]['id']);
			unset($data[0]['table']);
			unset($data[0]['image']);
		}

		$this->admin_manage_model->Edit($table, $data, $id);
		redirect('admin/'.$table.'');
	}
}