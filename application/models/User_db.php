<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_db extends CI_Model {

    public function user_insert($data)
    {
        $this->db->insert('member', $data);
    }
    public function users_login($data)
    {
        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" .$data['password']. "'";
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
    }
    public function read_user($username)
    {
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
    }
    public function get_user($id)
    {
        $condition = "id =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() == 1) {
                return $query->result_array();
            } else {
                return false;
            }
    }

}

?>