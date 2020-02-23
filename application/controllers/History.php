<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("History_model");
    }
    
    public function index(int $blog_id = NULL)
    {                
        $data['history'] = $this->History_model->get_history();
        
        $this->load->view('templates/header',$data);
        $this->load->view('blog/blog',$data);
        $this->load->view('templates/footer');            
    }
    
}

