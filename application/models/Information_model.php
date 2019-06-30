<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    const table_name = "INFORMATION";

    public function get_information($count = NULL) {
        if (is_null($count)) {
            $this->db->get_compiled_select(self::table_name,false);
        } else {
            $this->db->limit($count)->get_compiled_select(self::table_name,false);
        }
        $this->db->order_by("publishment_date", "desc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        return $this->db->get()->result_array();
    }
    
    public function insert_information($set) {
        return $this->db->insert(self::table_name, $set);
    }

}
