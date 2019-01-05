<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    const table_name = "blog";
    const default_count = 4;

    public function get_blog($count = self::default_count) {
        $this->db->limit($count)->get_compiled_select(self::table_name,false);
        $this->db->order_by("publishment_date", "desc");
        $this->db->join("blog_image", self::table_name.".id = blog_image.blog_id", "inner");
        $this->db->where("blog_image.order_no", 1);
        return $this->db->get()->result_array();
    }

    public function get_article(int $id) {
        $this->db->get_compiled_select(self::table_name,false);
        $this->db->join("blog_image", self::table_name.".id = blog_image.blog_id", "inner");
        $this->db->where("blog.id", $id);
        
        return $this->db->get()->result_array();

    }

}
