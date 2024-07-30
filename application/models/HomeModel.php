<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    public function get_data($tablename, $param)
    {
        $this->db->select('a.*, b.*');
        $this->db->from($tablename . ' a');
        $this->db->join('tbloffice b', 'a.officeid = b.officeid');
        $this->db->where($param);
        $query = $this->db->get();
        
        return $query->row_array();
    }

    public function get_active_quarter()
    {
        $this->db->where('is_active',1);
        $query = $this->db->get('tblquarters');
        return $query->row_array();
    }
}
