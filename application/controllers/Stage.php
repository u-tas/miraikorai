<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Information_model");
    }
    
    public function index()
    {
        $data['title'] = "stage";
        $this->load->view('templates/header',$data);
        $this->load->view('stage/stage_list',$data);
        $this->load->view('templates/footer');
    }
}

