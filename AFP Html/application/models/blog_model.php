<?php

class blog_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list($table) {
        $query = $this->db->get($table);
        $result = $query->result_array();
        return $result;
    }

    public function get_record($slug){
        $query = $this->db->get_where
                (
                    'blog',
                    array(
                        'slug'  =>  $slug
                    )
                );
        $result_record = $query->row_array();
        return $result_record;
    }
}