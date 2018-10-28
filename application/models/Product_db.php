<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_db extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function product_list()
  {
    return $this->db->get('product')->result_array();
  }
}
