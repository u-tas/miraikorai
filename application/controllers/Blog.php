<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Blog_model");
    }
    
    // 記事表示用
    public function index(int $blog_id = NULL)
    {        
        // 指示無い時は最新記事を、指示有る時は、指示された記事を取得
        $data['article'] = $this->Blog_model->get_article($blog_id);
        $data['latest_posts'] = $this->Blog_model->get_list(1);
        $data['title'] = "blog - ".$data['article'][0]['title'];
        
        $this->load->view('templates/header',$data);
        $this->load->view('blog/blog',$data);
        $this->load->view('templates/footer');            
    }
    
    // list画面用
    public function list(int $start = 1) 
    {
        $data['title'] = "blog";
        $this->load->view('templates/header',$data);

        $data['articles'] = $this->Blog_model->get_list($start);
        $this->load->view('blog/blog_list',$data);
        $this->load->view('templates/footer');        
    }
}

