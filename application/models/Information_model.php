<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    const table_name = "information";
    const default_count = 4;

    public function get_information($count = self::default_count) {
        $this->db->limit($count)->get_compiled_select(self::table_name,false);
        $this->db->order_by("publishment_date", "desc");
        return $this->db->get()->result_array();
    }

}
