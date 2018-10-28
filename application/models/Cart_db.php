<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_db extends CI_Model {

    public function get_product($id)
    {
        return $this->db->where('id', $id)->get('product')->row();
    }

    function findAll()
    {
        return $this->db->get('product')->result();
    }

    function find($id)
    {
        return $this->db->where('id', $id)->get('product')->row();
    }
    public function user_detail($id)
    {
        $query = $this->db->get_where('member', array('id' => $id), 1);
        return $query->result_array();
    }
    public function get_order()
    {
        $this->db->order_by('id', 'DESC');
        $q=$this->db->get('order');
        return $q->result_array();
    }
    public function order_insert($data)
    {
        $this->db->insert('order', $data);
    }
    public function payment_insert($data)
    {
        $this->db->insert('payment', $data);
    }
    public function order_list($id)
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('payment', 'payment.order_id=order.id', 'left');
        $this->db->join('product', 'product.id=order.product_id', 'left');
        $this->db->where('order.buyer_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function orderlist()
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('payment', 'payment.order_id=order.id', 'left');
        $this->db->join('product', 'product._id=order.product_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function payment()
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('payment', 'payment.payment_order_id=order.order_id', 'left');
        $this->db->join('product', 'product.product_id=order.order_product_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file ModelName.php */
