<?php
class Blog extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        $this->load->model("Blog_model");
        
    }
    
    public function view(int $blog_id = NULL)
    {
        $this->load->helper('html');
        $this->load->helper('url');
        
        if ($blog_id === null) 
        {
            $data['articles'] = $this->Blog_model->get_blog();
            $data['title'] = "blog";
            $this->load->view('templates/header',$data);
            $this->load->view('blog/blog_list',$data);
            $this->load->view('templates/footer');
        } else {
            $data['article'] = $this->Blog_model->get_article($blog_id);
            $data['latest_posts'] = $this->Blog_model->get_blog();
            $data['title'] = "blog - ".$data['article'][0]['title'];
            $this->load->view('templates/header',$data);
            $this->load->view('blog/blog',$data);
            $this->load->view('templates/footer');            
        }
    }
}

