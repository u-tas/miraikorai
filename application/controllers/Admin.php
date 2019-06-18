<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Information_model");
    }

    public function index() 
    {
        $data['title'] = 'admin';
        $data['information'] = $this->Information_model->get_information();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function Information() 
    {
        $data['title'] = 'information';
        $data['information'] = $this->Information_model->get_information();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/information/index',$data);
        $this->load->view('templates/footer');
    }
    public function Information_registration() 
    {
        $data['title'] = 'information';
        $data['information'] = $this->Information_model->get_information();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/information/registration',$data);
        $this->load->view('templates/footer');
    }
}

