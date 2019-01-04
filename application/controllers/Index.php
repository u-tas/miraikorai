<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function view() {
        $this->load->helper('html');
        $this->load->helper('url');

        $data['title'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}

