<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();    
    }
    
    public function index()
    {        
        $data['title'] = 'gallery';        
        $this->load->view('templates/header',$data);
        $this->load->view('gallery/gallery',$data);
        $this->load->view('templates/footer');
    }
}

