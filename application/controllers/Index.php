<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
        
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Information_model");
    }

    public function index() 
    {
        $data['title'] = '';
        $data['information'] = $this->Information_model->get_information(4);
        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }
}

