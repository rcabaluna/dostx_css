<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SurveyModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_data($tablename, $data) {
        $this->db->insert($tablename, $data);
        return $this->db->insert_id();
    }

    public function get_services($param) {
        $this->db->where($param);
        $this->db->order_by("CASE WHEN name = 'Others' THEN 1 ELSE 0 END", 'ASC');
        $this->db->order_by('unit', 'ASC');
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('tblservices');
        return $query->result_array();
    }

    public function get_all_data($tablename) {
        $query = $this->db->get($tablename);
        return $query->result_array();
    }

    public function get_active_quarter() {
        $this->db->where('is_active', 1);
        $query = $this->db->get('tblquarters');
        return $query->row_array();
    }

}
