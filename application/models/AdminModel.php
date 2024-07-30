<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data($tablename) {
        $query = $this->db->get($tablename);
        return $query->result_array();
    }

    public function update_status($tablename, $param) {
        $this->db->set('is_closed', $param['is_closed']);
        $this->db->where('shorthand', $param['shorthand']);
        $this->db->update($tablename);
    }

    public function get_event_data($tablename, $param) {
        $this->db->where($param);
        $query = $this->db->get($tablename);
        return $query->row_array();
    }

    public function get_quarters() {
        $this->db->select('tblquarters.*, tblsemester.*');
        $this->db->from('tblquarters');
        $this->db->join('tblsemester', 'tblquarters.semesterid = tblsemester.semesterid');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_quarter_status($quarterid) {
        $this->db->set('is_active', 0);
        $this->db->update('tblquarters');

        $this->db->set('is_active', 1);
        $this->db->where('quarterid', $quarterid);
        $this->db->update('tblquarters');
    }
}
