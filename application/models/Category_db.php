<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_db extends CI_Model {

    public function category_list()
    {
        return $this->db->get('category')->result_array();
    }

}

/* End of file Category_db.php */

?>