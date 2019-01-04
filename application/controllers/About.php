<?php
class About extends CI_Controller {
    public function view()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        
        $data['title'] = 'about';
        
        $this->load->view('templates/header',$data);
        $this->load->view('about/about');
        $this->load->view('templates/footer');
    }
}

