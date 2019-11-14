<?php

class add_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list($table) {
        $query = $this->db->get($table);
        $result = $query->result_array();
        return $result;
    }

    public function get_record($table, $id){
        $query = $this->db->get_where
                (
                    $table,
                    array(
                        'id'  =>  $id
                    )
                );
        $result_record = $query->row_array();
        return $result_record;
    }

    public function addCar($img) {
        $this->load->helper('url');
        $this->load->helper('text');
        $data = array(
            'nev' => $this->input->post('nev'),
            'leírás' => $this->input->post('leírás'),
            'ules'  => $this->input->post('ules'),
            'ajto'  => $this->input->post('ajto'),
            'hengerurtartalom'  => $this->input->post('hengerurtartalom'),
            'meghajtas'  => $this->input->post('meghajtas'),
            'ar'  => $this->input->post('ar'),
            'kep' => $img,
            'feltolto' => $this->ion_auth->user()->row()->username,
            'telefonszam' => $this->ion_auth->user()->row()->phone,
            'email' => $this->ion_auth->user()->row()->email
        );
        return $this->db->insert('car', $data);
    }
    
    public function addBike($img) {
        $this->load->helper('url');
        $this->load->helper('text');
        $data = array(
            'nev' => $this->input->post('nev'),
            'leírás' => $this->input->post('leírás'),
            'sebesség'  => $this->input->post('sebesség'),
            'hengerurtartalom'  => $this->input->post('hengerurtartalom'),
            'hengerek'  => $this->input->post('hengerek'),
            'ar'  => $this->input->post('ar'),
            'kep' => $img,
            'feltolto' => $this->ion_auth->user()->row()->username,
            'telefonszam' => $this->ion_auth->user()->row()->phone,
            'email' => $this->ion_auth->user()->row()->email
        );
        return $this->db->insert('bike', $data);
    }

    public function addBlog($img) {
        $this->load->helper('url');
        $this->load->helper('text');
        $data = array(
            'title' => $this->input->post('title'),
            'slug'  => $this->input->post('slug'),
            'leírás' => $this->input->post('leírás'),
            'text'  => $this->input->post('text'),
            'datum' => date("Y-m-d"),
            'kep' => $img,
        );
        return $this->db->insert('blog', $data);
    }

    public function delete($table, $id) {
       return $this->db->delete($table, array('id' => $id));
    }

}