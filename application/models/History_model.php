<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    const table_name = "HISTORY";

    public function get_history() {
        $this->db->get_compiled_select(self::table_name,false);
        $this->db->order_by("publishment_date", "desc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        return $this->db->get()->result_array();
    }

}
