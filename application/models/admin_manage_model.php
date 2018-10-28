<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_manage_model extends CI_Model {

	public function select($table='')
	{
		//$this->db->where('status', 1);
		$result = $this->db->get($table);
		return $result->result_array();
	}

	public function selectJoin($table='', $join_table = '')
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($table.'.status', 1);
		$this->db->join($join_table, ''.$join_table.'.id = '.$table.'.'.$join_table.'_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Add($table='', $data = '')
	{
		$this->db->select('sort_order');
		$this->db->order_by('sort_order', 'desc');
		$this->db->limit(1);
		$this->db->where('status', 1);
		$sort_order = $this->db->get($table)->result_array();

		if (!empty($sort_order[0]['sort_order'])) {
			$sort = (int)$sort_order[0]['sort_order'] + 1;
		}
		
		$sort = 1;

		$data[0] += array(
			'sort_order' => $sort,
			'status' => 1
		);

		$this->db->insert($table, $data[0]);
	}

	public function Edit($table='', $data = '', $id = '')
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data[0]);
	}

	public function order_list(){
		$query =$this->db->get('order');
		return $query->result_array();
	}

	public function order_del($id){
		$this->db->where('id', $id);
        $this->db->delete('order');
	}

	public function login($input){
		$query = $this->db->get_where('admin',array('username'=>$input['username'],'password'=>$input['password']));
		return $query;
	}
}