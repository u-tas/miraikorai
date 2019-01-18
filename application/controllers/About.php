<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("History_model");        
    }
    
    public function index()
    {        
        $data['title'] = 'about';        
        $this->load->view('templates/header',$data);
        
        $data['history'] = $this->History_model->get_history();
        $this->load->view('about/about',$data);
        $this->load->view('templates/footer');
    }
}

