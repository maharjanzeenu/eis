<?php

class Csv_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
    }
    
    function get_data() {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
    
    function insert_csv($data, $table_name) {
        $this->db->insert($table_name, $data);
    }
}
/*END OF FILE*/
