<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        
    public function __construct() 
    {
        parent::__construct();
    }

    public function Admin() 
    {
        $data['title'] = 'admin';
        $this->load->view('admin/admin_header',$data);
        $this->load->view('admin/admin_menu',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('templates/footer');
    }
}

