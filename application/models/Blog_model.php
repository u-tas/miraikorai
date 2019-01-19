<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    const table_name = "BLOG";
    const default_count = 4;

    public function get_list(int $start = 1, int $count = self::default_count) {
        $this->db->limit($count, $start-1)->get_compiled_select(self::table_name,false);
        $this->db->join("BLOG_IMAGE", self::table_name.".id = BLOG_IMAGE.blog_id", "left outer");
        $this->db->order_by("publishment_date", "desc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        $this->db->group_start();
            $this->db->where("BLOG_IMAGE.order_no", NULL);
            $this->db->or_where("BLOG_IMAGE.order_no", 1);
        $this->db->group_end();
        return $this->db->get()->result_array();
    }

    public function get_article(int $id = NULL) {
        $this->db->get_compiled_select(self::table_name,false);
        $this->db->join("BLOG_IMAGE", self::table_name.".id = BLOG_IMAGE.blog_id", "left outer");
        
        if ($id === NULL) // 最新記事を返す
        {
            $this->db->order_by("publishment_date", "desc");
            $this->db->limit(1);
        } else // 指示された記事を返す
        {
            $this->db->where("BLOG.id", $id);
        }
        $this->db->order_by("BLOG_IMAGE.order_no", "asc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        return $this->db->get()->result_array();

    }

}
